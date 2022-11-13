@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>เพิ่มรายชื่อ</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('projects.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('projects.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ชื่อ-สกุล:</strong>
                    <input type="text" name="name" class="form-control" placeholder="ชื่อ-สกุล">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>กลุ่มสาระ:</strong>
                    <textarea class="form-control" style="height:50px" name="introduction"
                        placeholder="กลุ่มสาระ"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ตำแหน่ง:</strong>
                    <input type="ตำแหน่ง" name="location" class="form-control" placeholder="ตำแหน่ง">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>จำนวนปีรับราชการ:</strong>
                    <input type="สังกัด" name="cost" class="form-control" placeholder="จำนวนปีการรับราชการ">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="บันทึก" class="btn btn-primary">บันทึก</button>
            </div>
        </div>

    </form>
@endsection
