<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script src="js/stsyle.js"></script>
    <title>Vue | UAS</title>
</head>

<body>
    <div class="container-fluid" id="container">

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">NEWS.ID</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">



                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary item-btn" data-toggle="modal" data-target=".bd-example-modal-lg">
                                Berita Pilihan<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell ml-2" viewBox="0 0 16 16">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
                                    <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                </svg>

                            </button>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex h-100">
                        <div class=" align-self-center">
                            <h3> <strong>Selamat Datang di NEWS.ID , </strong> <br>Media Informasi terupdate</h3>
                            <p>Pilih tema berita hari ini</p>
                            <hr>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <img src="hero.png" width="100%" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-bell mr-2" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
                            <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                        </svg>Berita terkini</h3>
                </div>
            </div>
            <button class="btn btn-success mb-3">Tambah Berita <i class='bx bx-plus'></i></button>
            <div class="row">
                <div class="col-md-4 mb-3 " v-for="isi in isian">
                    <div class="card">
                        <img v-bind:src="isi.image" class="card-img-top " alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{isi.kategori}}</h5>
                            <p class="card-text">{{isi.judul}}</p>
                            <button type="button" v-on:Click="addNews(isi.kategori,isi.judul)" class="btn btn-success">Simpan Berita</button>
                        </div>
                        <a href="" class="btn btn-info">read full <i class='bx bx-right-arrow-alt'></i></a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Berita Tersimpan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(isi,index) in keranjangKategori">
                                    <td>{{index+1}}</td>
                                    <td>{{isi}}</td>
                                    <td><button type="button" v-on:Click="removeNews(index)" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary " data-dismiss="modal">Kembali</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>&copy;Copyright 2021 | Mardha Mardiya All Reserved</p>
        </div>
    </div>
    <script>
        var vm = new Vue({
            el: '#container',
            data: {
                isian: [],
                keranjangKategori: [],
                keranjangJudul: []
            },

            methods: {
                addNews: function(kategori, judul) {
                    this.keranjangKategori.push(kategori);
                    this.keranjangJudul.push(judul);

                },
                removeNews: function(index) {
                    this.keranjangKategori.splice(index, 1);
                },
                upDate: function() {
                    axios.get('http://localhost/vueUAS/api.php').then(response => this.isian = response.data['pilih']);
                },
            },

            mounted() {
                this.upDate();
                setInterval(this.upDate, 1000)

            }

        })
    </script>

    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>




</body>

</html>