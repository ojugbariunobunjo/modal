@extends('layouts.app')
 
@section('content')
 
    <div class="container">
 
        <div class="card card-block">
            <h2 class="card-title">Laravel AJAX Examples
                <small>via jQuery .ajax()</small>
            </h2>
            <p class="card-text">Learn how to handle ajax with Laravel and jQuery.</p>
            <button id="btn-add" name="btn-add" class="btn btn-primary btn-xs">Add New student</button>
        </div>
 
        <div>
            <table class="table table-inverse">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Roll Number</th>
                    <th>FullNames</th>
                    <th>Email</th>
                    <th>Edit or Delete</th>
                </tr>
                </thead>
                <tbody id="links-list" name="links-list">
                @foreach ($students as $student)
                    <tr id="student{{$student->id}}">
                        <!--<td><img src="{{ asset('passports/110.jpg') }}" alt="passport" height="50px" width = "50px"></td>-->
                        <td><img src="{{ asset($student->path)}}" alt="picture" height="50px" width = "50px"></td>
                        <td>{{$student->id}}</td>
                        <td>{{$student->rollnum}}</td>
                        <td>{{$student->fullnames}}</td>
                        <td>{{$student->email}}</td>
                        <td>
                            <button class="btn btn-info open-modal" value="{{$student->id}}">Edit
                            </button>
                            <button class="btn btn-danger delete-student" value="{{$student->id}}">Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
 
            <div class="modal fade" id="linkEditorModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="linkEditorModalLabel">student Editor</h4>
                        </div>
                        <div class="modal-body">
                            <form id="modalFormData" name="modalFormData" class="form-horizontal" novalidate="">
 
                                <div class="form-group">
                                    <label for="inputLink" class="col-sm-2 control-label">student</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="student" name="student"
                                               placeholder="Enter URL" value="">
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="description" name="description"
                                               placeholder="Enter student Description" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes
                            </button>
                            <input type="hidden" id="link_id" name="link_id" value="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection
