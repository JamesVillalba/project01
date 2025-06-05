@extends('app')

@section('title', 'Contact')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center mb-4">Contact Me</h1>
            <p class="lead text-center">Get in touch with me for inquiries or collaborations.</p>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-md-6 offset-md-3">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="your@email.com">
                </div>
                
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Your message..."></textarea>
                </div>
                
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </form>
        </div>
    </div>
@endsection