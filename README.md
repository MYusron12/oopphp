![sahabatbelajar – 7](https://user-images.githubusercontent.com/50074126/88798051-797e2600-d1ce-11ea-804d-a8d0a496798b.png)


<h1>Object Oriented Pada PHP</h1>
<p></p>
<br>
<h3>1. Class dan Object</h3>
<p><b>Class </b>merupakan template dari <b>Object</b>. </p>
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
<p><b>Constant </b>merupakan sebuah identifier untuk menyimpan nilai, tetapi nilainya tidak dapat berubah ketika sudah di set dalam program. Penggunaan Constanta pada php menggunakan keyword <i>define()</i> diikuti dengan parameter nama konstanta serta valuenya atau bisa juga menggunakan keyword <i>const</i> </p>



<br>
<h3>11. Abstract Class</h3>
<br>
<h3>12. Autoloding</h3>
<br>
<h3>13. Namespace</h3>
<br>
