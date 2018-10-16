@extends('layouts.app') 
@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">

                    <!-- <div class="modal fade bs-example-modal-sm" id="registry" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"> -->
                    <div class="modal" id="registry" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">

                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header" style="padding:35px 50px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4><span class="glyphicon glyphicon-lock"></span>Create New User</h4>
                        </div>
                        <div class="modal-body">
                        <form>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Name</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter your name">
                        </div>

                        <div class="form-group">
                          <label for="exampleFormControlInput1">Email address</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Example select</label>
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect2">Example multiple select</label>
                          <select multiple class="form-control" id="exampleFormControlSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Example textarea</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                      </form>
                      
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection