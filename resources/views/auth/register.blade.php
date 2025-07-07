@extends('layouts.new')

@section('form')
    <h2 class="text-2xl font-semibold mb-6">Create Your Account</h2>

    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium">Full Name</label>
            <input id="name" type="text" name="name" required class="w-full mt-1 border-gray-300 rounded p-2" autofocus>
        </div>

        <div>
            <label for="email" class="block text-sm font-medium">Email Address</label>
            <input id="email" type="email" name="email" required class="w-full mt-1 border-gray-300 rounded p-2">
        </div>

        <div>
            <label for="password" class="block text-sm font-medium">Password</label>
            <input id="password" type="password" name="password" required class="w-full mt-1 border-gray-300 rounded p-2">
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-medium">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required class="w-full mt-1 border-gray-300 rounded p-2">
        </div>

        <button type="submit" class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
            Register
        </button>

        <div class="text-center mt-4 text-sm">
            Already have an account?
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
        </div>
    </form>
@endsection
