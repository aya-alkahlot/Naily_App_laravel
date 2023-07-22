
<html>
<title>All Services</title>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title_id</th>
                <th scope="col">Title</th>
                <th scope="col">Paragraph</th>
                <th scope="col">banner</th>
                <th scope="col">pre</th>
                {{-- <td>
                    <a class="btn btn-Danger" href="{{ route('service.services.delete.all.truncate') }}"
                        role="button">Delete All Truncate</a>
                </td> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($part_services as $part_service)
                <tr>
                    <th scope="row">{{ $part_service->id }}</th>
                    {{-- <th>{{ $part_service->title_id }}</th> --}}
                    <th>{{ $part_service->title }}</th>
                    <td>{{ $part_service->Paragraph }}</td>
                    <td>
                        @if ($part_service->banner != null)
                            <img src="{{ asset('assets/images/services/' . $part_service->banner) }}" width="50"
                                height="50">
                        @else
                            <img src="{{ asset('assets/images/services/notFound.jpg' . $part_service->banner) }}" width="50"
                                height="50">
                        @endif
                        {{-- <img src="{{ asset('assets/images/offers/' . $about->Logo) }}" width="50" height="50"> --}}
                    </td>
                    {{-- <td>
                        <a class="btn btn-primary" href="{{ route('service.services.Edit', $service->id) }}"
                            role="button">Edit</a>
                        <a class="btn btn-Danger" href="{{ route('service.services.Delete', $service->id) }}"
                            role="button">Delete</a>
                    </td> --}}
            @endforeach
            </tr>
        </tbody>
    </table>
</body>

</html>
