<x-layout>
    <!------ Include the above in your HEAD tag ---------->
    <div class="m-5 border  border-2 p-2 rounded">

        <div class="container emp-profile ">

            <form method="post">

                <div class="row border border-2 p-2">
                    <div class="col-md-4">
                        <div class="profile-img ">
                            <div class=" d-flex  justify-content-center my-3">

                                <img style="width: 50%; height:auto;"
                                    src="https://upload.wikimedia.org/wikipedia/id/thumb/9/91/TVKU-BChannel.png/800px-TVKU-BChannel.png"
                                    alt="" class="rounded" />
                            </div>

                            <div class="d-flex  justify-content-center m-2 ">
                                <img src='{{ asset('/profile.png') }}' alt="" class="rounded"
                                    style="width: 60%; height: auto" />
                            </div>

                            <div class="col-md-2 mt-3">
                                <a class="btn btn-success text-nowrap p-2 " href="{{ Route('surat-ijin.create') }}">
                                    Buat Ijin Lembur </a>
                            </div>
                            {{-- Href Create --}}

                            <div class="col-md-2 mt-3">
                                <a class="btn btn-primary text-nowrap p-2  " href="{{ Route('surat-ijin.index') }}">
                                    Status Surat
                                </a>
                            </div>
                            @if ($surat !== 0)
                                <div class="col-md-2 mt-3">
                                    <a class="btn btn-warning text-nowrap p-2  " href="{{ Route('user.surat') }}">
                                        Print Surat
                                    </a>
                                </div>
                            @endif

                            {{-- <div class="col-md-2 mt-3">
                                <a class="btn btn-warning text-nowrap p-2  ">
                                </a>
                            </div> --}}
                            <br>
                            <form class="col-md-2 mt-3" method="POST" action="logout">
                                @csrf
                                <button type="submit" class="btn btn-danger text-nowrap p-2  ">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>


                    <div class="col-md-6 border border-2 rounded m-2">
                        <div class="profile-head p-3">

                            <a class="nav-link active bg-gray border-bottom border-2 mb-5 h3" id="home-tab"
                                data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                aria-selected="true">
                                Profile
                            </a>
                            <x-profile></x-profile>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>