 <!-- wrapper  -->
 <!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
         <!-- ============================================================== -->
         <!-- pageheader -->
         <!-- ============================================================== -->
         <div class="row">
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                 <div class="page-header">
                     <h2 class="pageheader-title">Surat Izin Sidang proyek</h2>
                     <hr>
                 </div>
             </div>
         </div>
         <!-- ============================================================== -->
         <!-- end pageheader -->
         <!-- ============================================================== -->
            
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                     <button type="button" class="btn btn-primary text-white" id="download"><i class="fas fa-download"></i> Download PDF</button>
                     <!-- <h4 class="card-title">Surat Persetujuan dan Permohonan Sidang</h4> -->
                     <br>
                     <hr>
 
               
                    <div class="row justify-content-center mt-50 mb-50">
                        <div class="col-md-9">
                            <div class="border">
                                <div class="container" style="padding: 15px;" id="invoice">
                                    <div class="header" style="text-align: center;">
                                    <br>
                                        <h2><u>PERSETUJUAN DAN PERMOHONAN SIDANG PROYEK</u></h2>
                                    </div>
                                    <br>
                                    <div class="name">
                                        <p>Saya sebagai Pembimbing mahasiswa tersebut dibawah ini:</p>
                                        <table style="margin-left: 10px;margin-top: -15px;">
                                            <tr>
                                                <td>Nama Mahasiswa 1/Mahasiswa 2</td>
                                                <td>:</td>
                                                <td>...</td>
                                                <td>/</td>
                                                <td>...</td>
                                            </tr>
                                            <tr>
                                                <td>NPM 1/ NPM 2</td>
                                                <td>:</td>
                                                <td>...</td>
                                                <td>/</td>
                                                <td>...</td>
                                            </tr>
                                            <tr>
                                                <td>Judul Proyek</td>
                                                <td>:</td>
                                                <td>...</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pembimbing</td>
                                                <td>:</td>
                                                <td>...</td>
                                            </tr>
                                        </table>
                                        <br>
                                        <p>Menyatakan bahwa mahasiswa tersebut telah menyelesaikan Alat/Proyek 100%. Adapun penulisan laporan proyek telah diselesaikan seluruhnya 100%</p>
                                        <p>Dengan demikian saya mengajukan mahasiswa tersebut untuk mengikuti sidang Proyek. Apabila ternyata pernyataan saya tersebut tidak benar, maka saya menyetujui penundaan sidang termasuk pembatalan sidang Proyek untuk mahasiswa bimbingan saya tersebut sesuai aturan yang berlaku.</p>
                                    </div>
                                        <br>
                                        <br>
                                    <div class="tabel-mk signature-container">
                                        <span class="signature">Bandung, ..... 2022</span><br>
                                        <br>
                                        <br>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                    <table style="margin-left: 20px;margin-top: -15px;">
                                    <!-- ------------------------------------------------------ -->
                                    <!-- <tr>
                                        <td>Mahasiswa 1</td>
                                    </tr> -->
                                    </table>
                                    <br>
                                    <br>
                                    <br>
                                    <table>
                                    <tr>
                                        <td>(................................................)</td>
                                    </tr>
                                    <tr>
                                        <td>NPM ......................................</td>
                                    </tr>
                                    </table>
                                    <!-- ------------------------------------------------------ -->
                                    <table style="margin-left: 80px;">
                                    <!-- <tr>
                                        <td>Mahasiswa 2</td>
                                    </tr> -->
                                    </table>
                                    <br>
                                    <br>
                                    <br>
                                    <table>
                                    <tr>
                                        <td>(................................................)</td>
                                    </tr>
                                    <tr>
                                        <td>NPM ......................................</td>
                                    </tr>
                                    </table>
                                    <!-- ------------------------------------------------------ -->
                                    <table style="margin-left: 90px;">
                                    <!-- <tr>
                                        <td>Dosen Pembimbing</td>
                                    </tr> -->
                                    </table>
                                    <br>
                                    <br>
                                    <br>
                                    <table>
                                    <tr>
                                        <td>(................................................)</td>
                                    </tr>
                                    <tr>
                                        <td>NIK .........................................</td>
                                    </tr>
                                    </table>
                                    </row>
                                </div>
                            </div>
                        </div>
                    </div>
            
                 </div>
             </div>
         </div>
    </div>
</div>
    <script>
        window.onload = function() {
            document.getElementById("download")
                .addEventListener("click", () => {
                    const invoice = this.document.getElementById("invoice");
                    console.log(invoice);
                    console.log(window);
                    var opt = {
                        margin: 1,
                        filename: 'myfile.pdf',
                        image: {
                            type: 'pdf',
                            quality: 0.98
                        },
                        html2canvas: {
                            scale: 2
                        },
                        jsPDF: {
                            unit: 'in',
                            format: 'letter',
                            orientation: 'portrait'
                        }
                    };
                    html2pdf().from(invoice).set(opt).save();
                })
        }
    </script>