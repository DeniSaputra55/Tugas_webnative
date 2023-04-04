
<head>
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
</head>

    <?php
    include_once('top.php')
    ?>
    <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
                <h1 class="mt-4">Kontak</h1>
        
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"></li>
                <form>
                    <table align="center" cellpadding="2" width="50%">
                        <tbody>
                            <tr>
                                <td width="25%">
                                    <label>Nama</label>
                                </td>
                                <td>
                                    <input type="text" name="nama" value="" placeholder="silahkan masukan nama" size="50" width="100" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Email</label>
                                </td>
                                <td>
                                    <input type="email" name="email" value="" placeholder="Email Balasan akan dikirim disini" size="50" width="100" />
                                </td>
                            </tr>
                            <tr>
                                <td><label>Gender</label></td>
                                <td>
                                    <input type="radio" name="gender" value="L" checked /> Laki-laki &nbsp;&nbsp;
                                    <input type="radio" name="gender" value="P" />Perempuan
                                </td>
                            </tr>
                            <tr>
                                <td><span>Pesan</span></td>
                                <td>
                                    <textarea name="teks" cols="50" rows="5" placeholder=""></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button>Kirim</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </ol>
        </div>
    </main>
</div>


<?php
$src = [
    'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js',
    'js/scripts.js',
    'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js',
    'assets/demo/chart-area-demo.js',
    'assets/demo/chart-bar-demo.js',
    'https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js',
    'js/datatables-simple-demo.js'
];
include_once('bottom.php');
?>