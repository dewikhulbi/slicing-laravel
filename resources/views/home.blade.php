@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <!-- Hero Section -->
    <section class="hero bg-gray-100 p-10 text-center">
    <div class="flex justify-center">
    <img src="{{ asset('images/hero.jpeg') }}" alt="Alumni Tracer" class="w-1/6 rounded-lg shadow-md">
    </div>
        <h1 class="text-4xl font-bold mt-5">Empowering Alumni With The University Alumni Tracer</h1>
        <p>Track the success of our graduates and stay connected.</p>
        <a href="#" class="bg-green-500 text-white px-4 py-2 rounded">Learn More</a>
    </section>

    <!-- Features Section -->
    <section class="features grid grid-cols-2 gap-4 p-10">
        <div class="feature-card p-6 bg-white shadow-md flex items-center">
        <img src="{{ asset('images/icon.jpeg') }}" alt="icon" class="w-12 h-12 mr-3">
            <div>
                <h2 class="text-xl font-semibold">Data Kuesioner</h2>
                <p>Manage your profile after graduation.</p>
                <a href="#" class="text-blue-500">Get Started →</a>
            </div>
        </div>
        <div class="feature-card p-6 bg-white shadow-md flex items-center">
        <img src="{{ asset('images/data.jpeg') }}" alt="data" class="w-12 h-12 mr-3">
            <div>
                <h2 class="text-xl font-semibold">CV Builder</h2>
                <p>Priority support and exclusive access.</p>
                <a href="#" class="text-blue-500">Get Started →</a>
            </div>
        </div>
    </section>
</div>
@endsection
