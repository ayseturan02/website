<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\SessionGuard;
use Illuminate\Auth\Recaller;
use MongoDB\Driver\Session;
/* silmeeeeee
aaağğhhhhhh
dayanabilirimm
kar yağar kar üstüne
derdim var dert üstüne
gerisi neydi unuttum
amaaneeyy amanneyy halım yamaneyy
seni gelin getiren a
arpa buğday samanayeeyyy oyoyoyoyo senin canın sıkılıyor dmfnjfmmdfnm
sanayı seysini başvuruyom çok sey istiyor
olsun başvur bekliyom ben  bittttiiiiiiiiiiiiiiiiiiiiiiiiii

hadii  sahibinden motor bakıyom 170 0000   buldum  la kanka arkandaymmm         NAPAK ŞİMDİ
alabilir miyik
napacaz hangi site onagöre başlayalım
HABER Mİ RANDEVU MU
sen seç
motor sayfası yapalımd sadsfjşsjfşsjefşws(şaka)(opsiyonel fjşsljdfşlsde)
 yapalımm e ticarete giriyor satarız
bide dün bulduğun panelde uygunnnn

şimdi ciddi olma vaktif jfşosjf
ne yapalım

dediğin gibi motor sayfası yapabiliriz  haber küçük detayları var yorar bizi randevu ya hiç
girmek istemiyom dejavu yaşarız kkgjkdgdkj
ama e ticareti de herkes yapacak  hemennn

 https://themewagon.com/theme-price/free/   burdan site bul motora uygun
galerindeki motor resimlerini de kullanırız işte skdfkddkmkggsms

ay pardon telefonu klavyenin üzerine koydum
0 a basılı tutmuş jşkdshfşshfşhswfşws
o sectiğimiz gzuel değil miydi  evet o panel
bak buda site
https://themewagon.github.io/videograph/    bunu beğendiysen bunu motor sitesine çeviririz

https://www.harley-davidson.com/tr/tr/index.html
baksana şuna
https://www.yamaha-motor.eu/tr/tr/home/   BİDE ŞUNA

bunlardan gidemeyizz  bu attıklarına bakarak yukarıda attığım şeyyleri kullanırız
yok örnek olsun idye attım la
hee taslak olarak attın sandım https://themewagon.github.io/videograph/   bu nasıllll



basit ama güzellll istediğimiz de boyle bişeydi zaten
tmm bu olsun o zaman başlayalım
nasıl başlıycaz şimdi

proje açalım yeni  githuba bağlayalım
 sonra taslağı koyarız yavaş yavaş yaparız o ara bende çalışıp hatırlamaya çalışıyom
ekran paylaşarak yapsana goreyim ben de
ekran nasıl paylaşıyorduk

cayır cayır hem de istediğim motor

kdsşlfksşlfisljfis çalışıyor mu belki sadece kaskıdır
lan yok zaten o fiyat
benşm istediğim ikinci motor ama bu bu uygun fiyatı
*/
print("hello world");
class AuthController extends Controller
{

    public function loginPost(Request $request)
    {

     /*   $email = $request->input('email');
        $password = $request->input('password');

        if ($this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ])) {

            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return view('front.pages.homepage');

            } else {
                return redirect()->route('giris')->withErrors("email adresi veya şifre yanlış");
            }
        }
     */
        $request->validate([
           "email"=>"required",
           "password"=>"required"
        ]);

        $credentials=$request->only("email","password");
        if(Auth::attempt($credentials)){

            return redirect()->intended(route("anasayfa"));
        }
        return redirect(route("giris"))->withErrors("email adresi veya şifre yanlış");

    }

    public function store(Request $request)
    {
 /*       $users=new Auth;
        $users->name=$request->name;
        $users->email=$request->email;
        $users->password=$request->password;

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);


        // Verileri veri tabanına kaydet
        Auth::create($validatedData);

        // Kullanıcıyı ana sayfaya yönlendir
        return redirect('/');

*/

        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|'
        ]);

        Auth::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')->withSuccess('You have successfully registered & logged in!');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->withSuccess('You have logged out successfully!');
    }

}
