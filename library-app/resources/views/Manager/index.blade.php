@extends('layouts.master')
@section('content')
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Bootstrap Table with Header - Light -->
                        <div class="card">
                            <h5 class="card-header">Staff in library</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Project</th>
                                            <th>Client</th>
                                            <th>Users</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>
                                                <i class="mdi mdi-wallet-travel mdi-20px text-danger me-3"></i>
                                                <strong>Tours Project</strong>
                                            </td>
                                            <td>Albert Cook</td>
                                            <td>
                                                <ul
                                                    class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="Lilian Fuller">
                                                        <img src="../../assets/img/avatars/5.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="Sophia Wilkerson">
                                                        <img src="../../assets/img/avatars/6.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="Christina Parker">
                                                        <img src="../../assets/img/avatars/7.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="mdi mdi-trash-can-outline me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="mdi mdi-basketball mdi-20px text-info me-3"></i>
                                                <strong>Sports Project</strong>
                                            </td>
                                            <td>Barry Hunter</td>
                                            <td>
                                                <ul
                                                    class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="Lilian Fuller">
                                                        <img src="../../assets/img/avatars/5.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="Sophia Wilkerson">
                                                        <img src="../../assets/img/avatars/6.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="Christina Parker">
                                                        <img src="../../assets/img/avatars/7.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="badge bg-label-success me-1">Completed</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="mdi mdi-trash-can-outline me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="mdi mdi-greenhouse mdi-20px text-success me-3"></i>
                                                <strong>Greenhouse Project</strong>
                                            </td>
                                            <td>Trevor Baker</td>
                                            <td>
                                                <ul
                                                    class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="Lilian Fuller">
                                                        <img src="../../assets/img/avatars/5.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="Sophia Wilkerson">
                                                        <img src="../../assets/img/avatars/6.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="Christina Parker">
                                                        <img src="../../assets/img/avatars/7.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="mdi mdi-trash-can-outline me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="mdi mdi-bank mdi-20px text-primary me-3"></i> <strong>Bank
                                                    Project</strong></td>
                                            <td>Jerry Milton</td>
                                            <td>
                                                <ul
                                                    class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="Lilian Fuller">
                                                        <img src="../../assets/img/avatars/5.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="Sophia Wilkerson">
                                                        <img src="../../assets/img/avatars/6.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </li>
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="Christina Parker">
                                                        <img src="../../assets/img/avatars/7.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="mdi mdi-trash-can-outline me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Bootstrap Table with Header - Light -->

@endsection