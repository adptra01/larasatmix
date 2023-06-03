<x-app>
    <x-slot name="title">Report Page</x-slot>
    <div class="py-4 overflow-x-auto">
        <table id="example" class="table w-full text-center display table-zebra" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Pemilik</th>
                    <th>Alamat</th>
                    <th>Tanggal Akhir STNK</th>
                    <th>Nomor Polisi</th>
                    <th>Nomor Rangka</th>
                    <th>Nomor Mesin</th>
                    <th>Permohonan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $no => $item)
                    <tr>
                        <th>{{ ++$no }}</th>
                        <th>{{ $item->nameOfOwner }}</th>
                        <th>{{ $item->address }}</th>
                        <th>{{ $item->dateOfExpire }}</th>
                        <th>{{ $item->policeNumber }}</th>
                        <th>{{ $item->bodyNumber }}</th>
                        <th>{{ $item->engineNumber }}</th>
                        <th>{{ $item->description }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @section('css')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
        <style>
            table.dataTable thead tr,
            table.dataTable thead th,
            table.dataTable tbody th,
            table.dataTable tbody td {
                text-align: center;
            }
        </style>
    @endsection

    @section('js')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'excel', {
                            extend: 'pdf',
                            orientation: 'landscape',
                            pageSize: 'A4',

                        }
                    ],

                });
            });
        </script>
    @endsection
</x-app>
