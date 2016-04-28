@extends('vcms5::base')

<?php
$active = ['<span class="text-danger">Inactive</span>', '<span class="text-success">Active</span>'];
?>

@section('top-white')
    <h1>Provincial Data</h1>
@stop

@section('content-title')

@stop

@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Provincial Data</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">

                <table id="itable" class="table table-compact table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Province</th>
                        <th>Year</th>
                        <th>Collected</th>
                        <th>Recycled</th>
                        <th>Recovery</th>
                        <th>Diversion</th>
                        <th>5yr</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($data as $item)
                        <tr>
                            <td><a href="/admin/data/item?id={!! $item->id !!}">{!! $item->province !!}</a></td>
                            <td><a href="/admin/data/item?id={!! $item->id !!}">{!! $item->year !!}</a></td>
                            <td>{!! $item->collected !!}</td>
                            <td>{!! $item->recycled !!}</td>
                            <td>{!! $item->energy_recovery !!}</td>
                            <td>{!! $item->diversion_rate !!}</td>
                            <td>{!! $item->five_year_average !!}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('bottom-js')
    <script>
        $(document).ready(function() {
            $('#itable').dataTable({
                responsive: true,
                stateSave: true
            });
        });
    </script>
@stop