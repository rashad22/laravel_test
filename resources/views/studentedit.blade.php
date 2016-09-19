@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Admission</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="\update">
                        <input type="hidden" name="id" value="<?php echo $row->id?>"/>
                        <input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?= $row->name?>" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-mail</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?= $row->email?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact" class="col-md-4 control-label">Contact</label>
                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control" name="contact" value="<?= $row->contact?>" >
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
