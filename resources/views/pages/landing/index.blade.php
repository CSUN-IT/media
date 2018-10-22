@extends('layouts.master')

@section('title')
    Documentation
@endsection

@section('description')
    {{ env('APP_NAME') }} Web Service Documentation
@endsection

@section('content')
    <h2 id="introduction">Introduction</h2>
    <p>
        The {{ env('APP_NAME') }} Web Service leverages
        <a href="//cloud.name-coach.com">NameCoach</a> to retrieve an
        individual’s profile image and their pre-recorded name pronunciation.
        The web service provides a gateway via a REST-ful API. The information is retrieved by
        creating a specific URI and giving values to filter the data. The information that is
        returned is a JSON object that contains media information of a particular CSUN individual.
        The format of the JSON object is as follows:
    </p>
    <pre class="prettyprint"><code>{
    "success": "true",
    "status": "200",
    "api": "media",
    "version": "1.1",
    "collection": "media",
    "count": "3",
    "media": [
        {
            "audio_recording": "{{ url('1.1/faculty/media/'.$emailUri.'/audio-recording') }}",
            "avatar_image": "{{ url('1.1/faculty/media/'.$emailUri.'/avatar-image') }}",
            "photo_id_image": "{{ url('1.1/faculty/media/'.$emailUri.'/photo-id-image') }}"
        }
    ]
}</code></pre>
    <br>
    <h2 id="getting-started">Getting Started</h2>
    <ol>
        <li><strong>GENERATE THE URI:</strong> Find the usage that fits your need. Browse through subcollections, instances and query types to help you craft your URI.</li>
        <li><strong>PROVIDE THE DATA:</strong> Use the URI to query your data. See the Usage Example session.</li>
        <li><strong>SHOW THE RESULTS</strong></li>
    </ol>
    <p>Loop through the data to display its information. See the <a href="#usage-example">Usage Example</a> section.</p>
    <br>
    <h2 id="collections">Collections</h2>
    <strong>All Persons Media Listing</strong>
    <ul>
        <li>
            <a href="{{ url('1.1/faculty/media/'.$emailUri) }}">
                {{ url('1.1/faculty/media/'.$emailUri) }}
            </a>
        </li>
    </ul>
    <br>
    <h2 id="subcollections">Subcollections</h2>
    <strong>Specific Media Retrieval</strong>
    <ul>
        <li>
            <a href="{{ url('1.1/faculty/media/'.$emailUri.'/audio') }}">
                {{ url('1.1/faculty/media/'.$emailUri.'/audio') }}
            </a>
        </li>
        <li>
            <a href="{{ url('1.1/faculty/media/'.$emailUri.'/avatar') }}">
                {{ url('1.1/faculty/media/'.$emailUri.'/avatar') }}
            </a>
        </li>
        <li>
            <a href="{{ url('1.1/faculty/media/'.$emailUri.'/official') }}">
                {{ url('1.1/faculty/media/'.$emailUri.'/official') }}
            </a>
        </li>
    </ul>
    <br>
    <h2 id="usage-example">Usage Example</h2>
    <strong>Coming Soon!</strong>
@endsection