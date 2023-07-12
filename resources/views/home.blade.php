<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <header>
                        <nav>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </header>

                    <main>
                        <section class="hero">
                            <div class="hero-content">
                                <h1>Welcome to Our Laundry Website</h1>
                                <p>Manage your laundry services with ease.</p>
                                <a href="#" class="btn">Get Started</a>
                            </div>
                        </section>

                        <section class="services">
                            <h2>Our Services</h2>
                            <div class="service-card">
                                <div class="service-icon">
                                    <i class="fas fa-tshirt"></i>
                                </div>
                                <h3>Wash & Fold</h3>
                                <p>Leave your laundry to us. We will wash, dry, and fold them for you.</p>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">
                                    <i class="fas fa-tshirt"></i>
                                </div>
                                <h3>Dry Cleaning</h3>
                                <p>We provide professional dry cleaning services to keep your clothes fresh and clean.
                                </p>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">
                                    <i class="fas fa-tshirt"></i>
                                </div>
                                <h3>Alterations</h3>
                                <p>Need alterations or repairs? Our skilled tailors will take care of it.</p>
                            </div>
                        </section>
                    </main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
