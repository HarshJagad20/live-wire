<div class="container">
    <h1>All posts</h1>
    <table border="1px" class="table">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>

        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->phone}}</td>
        </tr>
        @endforeach

    </table>

    {{ $contacts->links() }}
</div>