@extends('admin.layouts.master')
@section('title', 'Dashboard')

@section('css')
    <link rel="stylesheet" href="{{ asset('backend/css/map.css') }}">
    <style>
      .map {
        position: relative;
        transform: translate(-50%, -50%);
        left: 15%;
        top: 300px;
      }
    </style>
@endsection

@section('content')
   <!-- Main Content -->
   <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
      </div>
      <div class="section-body">
        <div class="card card-primary">
            <div class="card-body" style="width: mac-content;display: flex;">
                <h1>Welcome</h1>
            </div>
        </div>
    </div>
    </section>
  </div>
@endsection


