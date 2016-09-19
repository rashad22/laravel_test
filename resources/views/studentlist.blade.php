@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Admission</div>
                <div class="panel-body">
                    <p class="bg-info label-success">{{Session::get('message')}}</p>
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Contact</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($data as $row) { ?>
                            <tr>
                                <td>#</td>
                                <td><?php echo $row->name ?></td>
                                <td><?php echo $row->email ?></td>
                                <td><?php echo $row->contact ?></td>
                                <td>
                                    <a href="<?php echo 'edit/' . $row->id; ?>">Edit</a>
                                    <a href="<?php echo 'delete/' . $row->id; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>

                    </table>
                    <?php echo $data->render(); ?>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
