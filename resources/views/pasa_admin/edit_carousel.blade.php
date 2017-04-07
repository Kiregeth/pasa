@extends('layouts.admin_app',['select' => 'edit_carousel'])


@section('content')
    <style>
        .modal-dialog {
            width: 60%;
        }
    </style>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <!-- Traffic sources -->
            <div class="panel panel-flat">
                <div class="container">
                    <div class="panel panel-default">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h1 align="center">Edit/Delete Carousel</h1>
                                    <a class="btn btn-default pull-right" data-toggle="modal" data-target="#add_new_modal">Add New</a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table width="100%" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>Title</th>
                                                <th>State</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php
/*                                            foreach($employees as $employee)
                                            {
                                            */?><!--
                                            <tr>
                                                <td><img src="<?/*=base_url()*/?>img/<?/*=$employee['emp_img']*/?>" height=50px width="50px"></td>
                                                <td><?/*=$employee['name']*/?></td>
                                                <td><?/*=$employee['designation']*/?></td>
                                                <td><?/*=$employee['phn_no']*/?></td>
                                                <td>
                                                    <a role="button" data-toggle="modal" data-target="#modal_edit_<?/*=$employee['emp_id']*/?>" class="btn btn-default">Edit</a>
                                                    <a href="<?/*=site_url('arriva_admin/delete_ourteam/'.$employee['emp_id'].'/'.$employee['emp_img'])*/?>" class="btn btn-default">Delete</a>
                                                </td>
                                            </tr>
                                            --><?php /*}*/?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /traffic sources -->
        </div>
    </div>

    <div id="add_new_modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 align="center" class="modal-title">Add New Carousel</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="add_new" id="add_new" action="" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group">
                                <label for="title" class="col-lg-2 control-label">Title:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter carousel title!">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="state" class="col-lg-2 control-label">State:</label>
                                <div class="col-lg-10">
                                    <select name="state" id="state" class="form-control">
                                        <option selected>on</option>
                                        <option>off</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <input class="center-block btn btn-default" type="file" name="myFile" onchange="readURL(this,'#blah')" />
                            </div>
                            <div class="_img text-center"><img id="blah" height="250px" width="500px" src=""/>
                                <p><strong><center>Image Preview ( Preferred height>600px, width>1200px )</center></strong></p><br><br>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-default pull-right">Add</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function readURL(input, temp) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(temp)
                        .attr('src', e.target.result)
                        .width(500)
                        .height(250);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
