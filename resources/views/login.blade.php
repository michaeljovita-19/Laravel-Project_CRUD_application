<x-loginLayout>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="bg-white shadow p-4 rounded w-100" style="max-width: 400px;">

            <a href="{{ url()->previous() }}" class="text-primary text-decoration-none d-flex align-items-center mb-3">
                <i class="bi bi-arrow-left"></i> Back
            </a>

            <h2 class="text-center fw-bold mb-4 text-dark">Login</h2>

            <form action="{{ route('login.user') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label fw-medium">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required
                        class="form-control">
                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-medium">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required
                        class="form-control">
                    @error('password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <div class="mt-3 text-center">
                <p class="small text-muted">Don't have an account?
                    <a href="{{ route('register') }}" class="text-primary text-decoration-none">Register</a>
                </p>
            </div>
        </div>
    </div>
</x-loginLayout>
