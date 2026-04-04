@extends('layouts.app')

@section('page_title', 'Admin Dashboard - Buffer Zone EMS')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-4xl font-bold" style="color: #213340;">Admin Dashboard</h1>
        <form action="/api/auth/logout" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn-emergency px-4 py-2 rounded">Logout</button>
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Total Submissions</h3>
            <p class="text-3xl font-bold mt-2">0</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Unread Messages</h3>
            <p class="text-3xl font-bold mt-2">0</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Gallery Items</h3>
            <p class="text-3xl font-bold mt-2">0</p>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold mb-4" style="color: #213340;">Quick Actions</h2>
        <ul class="space-y-2">
            <li><a href="#" class="text-blue-600 hover:underline">View Contact Submissions</a></li>
            <li><a href="#" class="text-blue-600 hover:underline">Manage Gallery</a></li>
            <li><a href="#" class="text-blue-600 hover:underline">System Settings</a></li>
        </ul>
    </div>
</div>
@endsection
