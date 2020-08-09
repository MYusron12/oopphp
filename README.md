![sahabatbelajar – 7](https://user-images.githubusercontent.com/50074126/88798051-797e2600-d1ce-11ea-804d-a8d0a496798b.png)


<h1>Object Oriented Pada PHP</h1>
<p><b>OOP</b> atau Object Oriented Programming adalah metode pemrograman berorientasi object, dimana semua element yg ada dalam struktur program merupakan object kemudia object-object tersebut akan bisa dipakai berulang ulang kali di dalam programnya. Kenapa harus object oriented, karena ketika program yang akan kita buat yang nantinya akan menjadi besar maka hanya diperlukan beberapa object saja yg bisa diterapkan di banyak model, controller, serta view. bahkan jika kita hanya mempunyai satu function, dan function itu akan digunakan di banyak view maka kita tinggal meload/ memanggilnya saja. Contoh ketika kita membuat sebuah sidebar dan akan digunakan untuk view admin juga user, maka kita hanya butuh menampung sidebar tersebut di controller kemudian tinggal kita load di view admin ataupun user saat dipakai. Selain itu Object Oriented Programming juga merupakan sebuah paradigma pemrograman, dimana konsep ini banyak dipakai di framework. Banyak bahasa pemrograman yg menggunakan konsep oop, karena nyama digunakan untuk berkolaborasi antar programmer serta lingkup pengembangan object oriented sangat luas bahkan berkembang pesat.

karakteristik Object Oriented programming : 
- penyusunan semua data dan kode program sebagai object
- Object adalah unit dasar dari program
- Object menyipan data dan perilaku
- Object bisa saling berinteraksi

kelebihan Object Oriented :
- Representasi dunia nyata
- Enkapsulasi & abstraksi data
-reusability
- skalability & ekstensibility
- kemudahan pengelolaan, kolabirasi
- digunakan oleh framework.
</p>
<br>

<h2>Beberapa istilah dalam Object Oriented Programming</h2>
<h3>1. Class dan Object</h3>
<p><b>Class </b>merupakan template dari <b>Object</b>. Penggunaan class sangat erat kaitannya dengan object, ketika kita membuat sebuah class dan akan memakainya maka kita harus menginstansiasi atau membuatnya sebagai object. Pembuatan class di awali dengan keyword class kemudian nama class diwalai huruf besar, lalu kurung krawal buka dan kurung kurawal tutup, didalam kurung kurawal dapat diberikan method dan properti yang artinya class tersebut dapat melakukan apa yang ada pada properti dan method. pada bagian luar kurung kurawal class, disini kita membuat instansiasi object dengan cara menuliskan variable lalu samadengan dan diikuti dengan keyword new serta nama class nya.</p>

![carbon (3)](https://user-images.githubusercontent.com/50074126/89730360-2165e000-da68-11ea-9ad0-9d77fcfdec92.png)


<br>
<h3>2. Propert dan Method</h3>
<br>
<h3>3. Constructor</h3>
<br>
<h3>4. ObjectType</h3>
<br>
<h3>5. Inheritance</h3>
<br>
<h3>6. Overriding</h3>
<br>
<h3>7. Visibility</h3>
<p><b>- Public</b> dapat digunakan dimana saja, bahkan diluar class</p>
<p><b>- Protected</b> hanya dapat digunakan dalam sebuah class beserta turunannya.</p>
<p><b>- Private</b> hanya dapat digunakan didalam sebuah class tertentu saja.</p>
<br>
<h3>8. Setter dan Getter</h3>
<p><b>Setter & Getter / (Accessor Method)</b>.
Penggunaan setter dan getter terdapat pada saat kita menghindarai visibility public, karena sebaiknya kita tidak membiarkan bagian dari class kita bisa mengaksees secara langsung, maka dari itu ita harus merubah visibilitynya menjadi protected atau private. Setter dan getter merupakan method untuk membaca isi dari properti ataupun mengubah isinya. Alasan utama penggunaan method getter adalah untuk melakukan atau menambahakn perilaku juga property private yg ada di class parent di dalam methodnya misalkan validasi, sedangkan alasan penggunaan setter adalah untuk mengubah property yg bersifat private pada class parent dengan cara membuat method baru dan menambahkan parameter berupa properti yg akan dirubah. Kenapa harus dilakukan setter dan getter sedangkan jika kita membuat property dengan visibility public saja sebuah program berjalan dengan baik, karena dengan mengguakan setter dan getter memungkinkan kita membuat validasi agar program menjadi secure. Setter dan Getter pada php bisa dilakukan dengan menggunakan magic method __set() & __get() </p>
<br>
<h3>9. Static Keyword</h3>
<p><b>Static keyword</b> merupakan akses property dan method dalam konteks class, dengan menggunakan keyword <i>static<i> instansiasi dapat langsung dilakukan. penggunaanya menggunakan tanda '::' diawali nama class dan diakhiri dengan property serta method. Static kkeyword dilakukan pada properti dan method terkait dengan class atau yg pada satu class. Lalu nilai static akan selalu tetap meskipun object di instansiasi berulang kali. Dengan menggunakan keyword static membuat kode menjadi procedural, keyword static biasanya digunakan untuk membuat fungsi bantuan atau helper yg tertanam di frameowrk biasanya, dan class class yg bersifat utility.</p>

![carbon](https://user-images.githubusercontent.com/50074126/88805683-a84dc980-d1d9-11ea-82ab-b6a3e966cf0a.png)


<br>
<h3>10. Constant</h3>
<p><b>Constant </b>merupakan sebuah identifier untuk menyimpan nilai, tetapi nilainya tidak dapat berubah ketika sudah di set dalam program. Penggunaan Constanta pada php menggunakan keyword <i>define()</i> diikuti dengan parameter nama konstanta serta valuenya atau bisa juga menggunakan keyword <i>const</i>.</p>
<br>
<h3>11. Abstract Class</h3>
<p><b>Abstract Class </b>merupakan sebuah class yg tidak dapat di instansiasi atau tidak dapat dibuat object, Lalu mendifinisikan interface untuk class yg menjadi turunannya, class abstract berperan sbg kerangka dasar untuk class turunan. Class abstarct memiliki minimal 1 method abstarct. Class abstract digunakan dalam pewarisan / inheritance untuk memaksakan implementasi method abstarct yg sama untuk class turunannya. Class abstract di awali keyword abstract berisi properti yg juga abstract. Semua class turunan harus mengimplementasi method abstarct yg ada di class abstract. Class abstract boleh memiliki property / method regular, serta static method. Konsep class abstract merepresentasikan ide atau konsep dasar pada object oriented programming. Dengan menggunakan class abstract dapat mempermudah pengerjaan tim serta sentra logic.</p>

![carbon (1)](https://user-images.githubusercontent.com/50074126/88815870-054f7c80-d1e6-11ea-87de-3ec37ed10f6b.png)


<br>
<h3>12. Interface</h3>
<p><b>Interface</b> adalah sebuah class abstract yg sama sekali tidak memiliki implementasi. Interface merupakan class yang murni template untuk class turunannya, lalu interface tidak memiliki property hanya deklarasi method saja yang harus menggunakan visibility public. interface boleh mendeklarasikan magic method berupa construct "__construct()". Satu class boleh mengimplementasikan banyak interface.</p>

![carbon (2)](https://user-images.githubusercontent.com/50074126/88920776-9af71480-d297-11ea-8fb5-8d1c8f42c896.png)


<br>
<h3>13. Autoloding</h3>
<p><b>Autoloading </b>adalah proses pemanggilan class atau file tanpa harus menggunakan perintah require, atau proses pemanggilannya secara otomatis.</p>
<br>
<h3>14. Namespace</h3>
<p><b>Namespace</b> adalah sebuah cara untuk mengelompokkan program ke dalam sebuah package tersendiri atau disebut juga encapsulation. kenapa dilakukan namespace, karena php tidak mengijinkan dalam 1 program mempunyai class yg sama.</p>
<br>
