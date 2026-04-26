@extends('layouts.portfolio')

@section('content')
    {{-- Hero --}}
    @include('components.portfolio.hero', ['personal' => $data['personal']])

    {{-- About --}}
    @include('components.portfolio.about', ['personal' => $data['personal']])

    {{-- Experience --}}
    @include('components.portfolio.experience', ['experience' => $data['experience']])

    {{-- Skills --}}
    @include('components.portfolio.skills', ['skills' => $data['skills']])

    {{-- Education, Certificates & Contact --}}
    @include('components.portfolio.contact', [
        'personal' => $data['personal'],
        'education' => $data['education'],
        'certificates' => $data['certificates'] ?? []
    ])
@endsection
