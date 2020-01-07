<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <title> Pengulangan di PHP </title>
  </head>
  <body>
      <h1>Pengulangan di PHP</h1>
      <p>Pada PHP ada 4 jenis perulanggan yang bisa kita gunakan:</p>
        <ul>
            <li>Perulangan For</li>
            <li>Perulangan While</li>
            <li>Perulangan Do/While</li>
            <li>Perulangan Foreach</li>
        </ul>
    <h4>Pengulangan For</h4>
    <p>Pengulangan For adalah perulang yang termasuk dalam counted loop, karena kita bisa menentukan jumlah perulangganya. </p>

    <p>Bentuk dasar perulangan For:</p><br>

    <!-- Awal Sript contoh -->
    <div style="background: #ffffff; overflow:auto;width:400px;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%">1
2
3
4
5
6
7</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #557799">&lt;?php</span>

  <span style="color: 557799">for ($i = 0; $i &lt; 10; $i++){</span>
  <span style="color: 557799"> // blok kode yang akan diulang di sini</span>
  <span style="color: 557799">}</span>

<span style="color: 557799">?&gt;</span>
   </pre></td></tr></table></div>

   <!-- Akhir sript contoh -- >
    
<p>Dari sript dasar For di atas kita akan mencoba dengan sript <a href="">latihan For-1</a> seperti ini </p>
<!-- Awal sript For 1 -->
<div style="background: #ffffff; overflow:auto;width:400px;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%">1
  2
  3
  4
  5
  6
  7
  8</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #557799">&lt;?php</span>
    <span style="color: 557799"></span>
    <span style="color: 557799">for ($i = 0; $i &lt;= 9; $i++)</span>
    <span style="color: 557799">{</span>
    <span style="color: 557799"> echo $i . &#39;&lt;br /&gt;&#39;;{</span>
    <span style="color: 557799">{</span>
    <span style="color: 557799"> </span>
    <span style="color: 557799">?&gt;</span>
    </pre></td></tr></table></div>

   <!-- Akhir sript For 1 -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <br>
    <h5>Sumber :</h5>
    <a href="https://">
  </body>
</html>