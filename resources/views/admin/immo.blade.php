<x-app-layout>
    @include('admin.header')
    @include('admin.sidebar')


    <div class="container-fluid page-body-wrapper">
        <div class="container">
            <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding:15px;">
                    <label for="" class="form-control">Doctor Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Ecrire le prenom">
                </div>

                <div style="padding:15px;">
                    <label for="" class="form-control">Doctor Spéciality</label>
                    <select id="" name="speciality">
                        <option value="">--Select--</option>
                        <option value="">Dentist</option>
                        <option value="">Senegalais</option>
                        <option value="">africain</option>
                    </select>
                </div>


                <div style="padding:15px;">
                    <label for="" class="form-control">Doctor Telephone </label>
                    <input type="tel" class="form-control" name="Telephone" placeholder="Ecrire Telephone ">
                </div>

                <div style="padding:15px;">
                    <label for="" class="form-control">Doctor Image</label>
                    <input type="file" class="form-control" name="file">
                </div>


                <div style="padding:15px;">

                    <input type="submit" class="btn btn-success" name="submit">
                </div>

            </form>
        </div>
    </div>
    </form>

    @include('admin.script')


</x-app-layout>