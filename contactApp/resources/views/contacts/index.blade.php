@extends('layouts.main')

@section('content')
    <main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Contacts</h2>
                    <div class="ml-auto">
                      <a href="{{ route('contacts.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6"></div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col">
                        <div class="input-group mb-3">
                          <select class="custom-select">
                            <option value="" selected>All Companies</option>
                            <option value="1">Company One</option>
                            <option value="2">Company Two</option>
                            <option value="3">Company Three</option>
                          </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Company</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($message = session('message'))
                      <div class="alert alert-success">{{ $message }}</div>
                    @endif

                    @if ($contacts->count())
                      @foreach ($contacts as $index => $contact)
                        <tr>
                          <th scope="row">{{ $index + 1 }}</th>
                          <td>{{ $contact->first_name }}</td>
                          <td>{{ $contact->last_name }}</td>
                          <td>{{ $contact->email }}</td>
                          <td>{{ $contact->company->name }}</td>
                          <td width="150">
                            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('contacts.destroy', $contact->id) }}" class="btn-delete btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></a>
                          </td>
                        </tr>
                      @endforeach
                      <form id="form-delete" method="POST" style="display: none">
                        @csrf
                        @method('DELETE')
                      </form>
                    @endif
                  </tbody>
                </table> 


              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection