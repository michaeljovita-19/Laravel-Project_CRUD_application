<x-loginLayout>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="bg-white shadow-lg rounded p-4 w-100" style="max-width: 400px;">

            <a href="{{ url()->previous() }}" class="text-primary text-decoration-none d-flex align-items-center mb-3">
                <i class="bi bi-arrow-left"></i> Back
            </a>

            <h2 class="text-center fw-bold mb-4 text-dark">Create Your Account</h2>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-medium">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Your Name"
                        class="form-control" required>
                    @error('name')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-medium">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Your Email"
                        class="form-control" required>
                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-medium">Password</label>
                    <input type="password" id="password" name="password" placeholder="Your Password"
                        class="form-control" required>
                    @error('password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label fw-medium">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password"
                        class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>

            <div class="mt-3 text-center">
                <p class="small text-muted">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-primary text-decoration-none">Login</a>
                </p>
            </div>
        </div>
    </div>
</x-loginLayout>
