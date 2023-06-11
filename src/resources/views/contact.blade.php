<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <style type="text/css">
    table, th, td {
      border: 1px solid;
    }
  </style>
</head>
<body>
  <h1>Contact us any time </h1>
  <form action="{{route('contact')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter name" required>
    <input type="text" name="email" placeholder="Enter email" required>
    <textarea name="message" placeholder="Enter your message" required></textarea>
    <button>Send Message</button>
  </form>
  <br>
  <br>
  <br>
  <br>
  <table>
    <thead>
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
    </thead>
    <tbody>
      @foreach($contactList as $row)
      <tr>
        <td>{{$row->name}}</td>
        <td>{{$row->email}}</td>
        <td>{{$row->message}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <br>
  <br>
  <br>
  <br>
  <h3>{{\config('contact.contact_text_3')}}</h3>
</body>
</html>