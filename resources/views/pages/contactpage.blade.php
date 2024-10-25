@extends('layouts.main')

@section('content')
<main>
    <div class="page-container">
        <div class="contact-container">
            <div class="contact-form-container">
                <h1>Contact Us</h1>

                @if (session('success'))
                    <div style="color: green; margin-bottom: 15px;">
                        {{ session('success') }}
                    </div>
                @endif

                <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>

                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>

                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" placeholder="Your Message" required></textarea>

                    <button type="submit" class="contact-submit-btn">Submit <i>→</i></button>
                </form>
            </div>

            <div class="contact-info">
                <h3>Contact Information</h3>
                <p><span>Phone:</span> +84 789 123 123</p>
                <p><span>Email:</span> tudaicomtam@gmail.com</p>
                <p><span>Address:</span> 123 Main Street, Hanoi, Vietnam</p>

                <h3 class="mt-4">Site Map</h3>
                <ul style="list-style-type: none; padding: 0;">
                    <li><a href="{{ route('homepage') }}">Home</a></li>
                    <li><a href="{{ route('galleriespage') }}">Galleries</a></li>
                    <li><a href="{{ route('categoriespage') }}">Categories</a></li>
                    <li><a href="{{route('contact.index')}}">Contact Us</a></li>
                </ul>

                <h3 class="mt-4">Quick Contacts</h3>
                <ul style="list-style-type: none; padding: 0;">
                    <li><strong>Support:</strong> +84 111 222 333</li>
                    <li><strong>Sales:</strong> +84 222 333 444</li>
                    <li><strong>Marketing:</strong> +84 333 444 555</li>
                </ul>
            </div>
        </div>
    </div>
</main>
@endsection
