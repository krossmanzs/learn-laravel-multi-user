<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg rounded-xl">
            <h3 class="text-2xl font-bold text-center">Login to your account</h3>
            @if($errors->any()) 
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 px-6 py-4 mt-2 rounded-r-md" role="alert">
                    <ul class="list-disc">
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="" method="POST">
                {{-- csrf untuk memastikan proses post hanya bagian form yang kita miliki --}}
                @csrf
                <div class="mt-4">
                    <div>
                        <label class="block" for="email">Email</label>
                        <input type="email" name="email" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" value="{{ old('email') }}">
                    </div>
                    <div>
                        <label class="block" for="password">Password</label>
                        <input type="password" name="password" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="flex items-baseline justify-between">
                        <button class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900" name="submit" type="submit">Login</button>
                        <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>