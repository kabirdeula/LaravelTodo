<x-app-layout>
    <x-slot name="title">Dashboard</x-slot>
    <div class="row m-4 ">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                                Friends
                            </div>
                            <div class="h5 mb-0 fw-bold text-gray-800">
                                Hello
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                                Teams
                            </div>
                            <div class="h5 mb-0 fw-bold text-gray-800">
                                Hello
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                                Tasks
                            </div>
                            <div class="h5 mb-0 fw-bold text-gray-800">
                                Hello
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                                ToDos
                            </div>
                            <div class="h5 mb-0 fw-bold text-gray-800">
                                {{ $todo }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            </div>
        </div>
    </div> --}}
</x-app-layout>

<div class="row">

    <!-- Student Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                            Students
                        </div>
                        <div class="h5 mb-0 fw-bold text-gray-800">
                            {{-- <?php echo $studentCount; ?> --}}Hello
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-graduation-cap fa-2x text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
