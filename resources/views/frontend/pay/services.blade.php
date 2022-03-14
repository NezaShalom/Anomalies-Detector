<!doctype html>
<html lang="zxx">
@extends('frontend.layouts.main')
@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                    @foreach($service as $sev)
                        <div class="col-md-4">
                            <a class="text-da" href="{{url('/'.$sev->slug)}}">
                            <div>
                                <p>{{ $sev->title}}</a></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection