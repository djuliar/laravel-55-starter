@extends('layouts.admin._admin')

@section('content')
<section class="content col">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-center font-weight-bold w-100">Card Box</h3>
                </div>
                <div class="card-body">
                    <table width="100%" class="datatables table table-striped table-bordered table-hover dt-responsive" id="datatable-example">
                        <thead>
                            <tr>
                                <th>Coloumn 1</th>
                                <th>Coloumn 2</th>
                                <th>Coloumn 3</th>
                                <th>Coloumn 4</th>
                                <th>Coloumn 5</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection