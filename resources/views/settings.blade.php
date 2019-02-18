@extends('layout')

@section('title', 'Settings')

@section('main')
  <h1>Settings</h1>
  <p>Toggle the Maintenance Mode</p>
  <form method="post">
    @csrf
    <div class="form-group">
      <input type="checkbox" name="OnorOff" value="on"> maintenance on
    </div>
    <input type="submit" value="toggle" class="btn btn-primary">
  </form>
@endsection