<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>List Peserta BLKK</title>
    @include('templates.header')
    </head>
        <body>
            <div class="row">
                <div class="col">
                <section class="konten" style="padding: 1.5rem 24px 1.5rem 24px">
                    <h1 class="text-center"> <a href="{{ route('listpeserta') }}" class="text-decoration-none"
                            style="color: black">List Peserta BLKK</a>
                    </h1>
                    <a href="" class="btn btn-print mb-4">Export To Excel</a>
                    <div>
                        <table class="table table-hover table-striped text-center" id="kwitansi-table" style="margin-bottom: 2rem">
                            <thead>
                                <tr>
                                    <th style="width: 2rem; justify-content: center; align-items: center; cursor: pointer; border-top-left-radius: 6px"
                                        id="sortNo">No.</th>
                                    <th style="width: 4.5rem;">Nama Peserta</th>
                                    <th style="width: 6rem;">Pelatihan</th>
                                    <th style="width: 10rem;">Waktu Pelatihan</th>
                                    <th style="width: 4.5rem;">No. HP</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            @extends('templates.footer')
        </body>


        <style>
    .btn-print {
        background-color: #50bbf9;
        color: #404567;
        border-radius: 0.3rem;
    }

    .btn-print:hover {
        background-color: #e5eae6;
        color: #404567;
        border: 1px solid #8e4761
    }

    .body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
    }

    .table th {
        background-color: #3c8764;
        color: white;
        text-align: center;
        vertical-align: middle;
        margin: 0;
        padding: 0 4px 0 4px;
        height: 4rem;
        border-bottom: 1px solid #493d3d
    }

    .table td {
        margin: 0;
        padding: 0 4px 0 4px;
        vertical-align: middle;
        height: 6rem;
    }

    .konten {
        flex-grow: 1;
        min-height: calc(100vh - 60px);
    }

        </style>
</html>