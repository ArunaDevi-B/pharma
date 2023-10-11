<?php
$page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
?>

<section>
    <!-- nav first section start -->

    <div class="px-4 py-1 navbar-one  d-lg-block d-md-block d-none">
        <div class="d-flex align-items-center justify-content-lg-between justify-content-center flex-wrap">
            <div>
                <p class="fs-16 fw-400 mb-0 text-white">Welcome to Pharmalink</p>
            </div>
            <div class="d-flex gap-2 align-items-center py-lg-0 py-md-0 py-3">
                <div class="icon-bg">
                    <svg width="15" height="15" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6 6.00002C11.6 2.90882 9.09122 0.400024 6.00002 0.400024C2.90882 0.400024 0.400024 2.90882 0.400024 6.00002C0.400024 8.71042 2.32642 10.9672 4.88002 11.488V7.68002H3.76002V6.00002H4.88002V4.60002C4.88002 3.51922 5.75922 2.64002 6.84002 2.64002H8.24002V4.32002H7.12002C6.81202 4.32002 6.56002 4.57202 6.56002 4.88002V6.00002H8.24002V7.68002H6.56002V11.572C9.38802 11.292 11.6 8.90642 11.6 6.00002Z" fill="white" />
                    </svg>
                </div>
                <div class="icon-bg">
                    <svg width="15" height="15" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.64802 0.400024H8.35203C10.144 0.400024 11.6 1.85602 11.6 3.64802V8.35203C11.6 9.21345 11.2578 10.0396 10.6487 10.6487C10.0396 11.2578 9.21345 11.6 8.35203 11.6H3.64802C1.85602 11.6 0.400024 10.144 0.400024 8.35203V3.64802C0.400024 2.7866 0.742224 1.96046 1.35134 1.35134C1.96046 0.742224 2.7866 0.400024 3.64802 0.400024ZM3.53602 1.52002C3.00135 1.52002 2.48857 1.73242 2.1105 2.1105C1.73242 2.48857 1.52002 3.00135 1.52002 3.53602V8.46402C1.52002 9.57842 2.42162 10.48 3.53602 10.48H8.46402C8.9987 10.48 9.51148 10.2676 9.88955 9.88955C10.2676 9.51148 10.48 8.9987 10.48 8.46402V3.53602C10.48 2.42162 9.57842 1.52002 8.46402 1.52002H3.53602ZM8.94002 2.36002C9.12568 2.36002 9.30372 2.43377 9.435 2.56505C9.56628 2.69633 9.64002 2.87437 9.64002 3.06002C9.64002 3.24568 9.56628 3.42372 9.435 3.555C9.30372 3.68627 9.12568 3.76002 8.94002 3.76002C8.75437 3.76002 8.57632 3.68627 8.44505 3.555C8.31377 3.42372 8.24002 3.24568 8.24002 3.06002C8.24002 2.87437 8.31377 2.69633 8.44505 2.56505C8.57632 2.43377 8.75437 2.36002 8.94002 2.36002ZM6.00002 3.20002C6.74263 3.20002 7.45482 3.49502 7.97992 4.02013C8.50502 4.54523 8.80002 5.25742 8.80002 6.00002C8.80002 6.74263 8.50502 7.45482 7.97992 7.97992C7.45482 8.50502 6.74263 8.80002 6.00002 8.80002C5.25742 8.80002 4.54523 8.50502 4.02013 7.97992C3.49502 7.45482 3.20002 6.74263 3.20002 6.00002C3.20002 5.25742 3.49502 4.54523 4.02013 4.02013C4.54523 3.49502 5.25742 3.20002 6.00002 3.20002ZM6.00002 4.32002C5.55446 4.32002 5.12715 4.49702 4.81208 4.81208C4.49702 5.12715 4.32002 5.55446 4.32002 6.00002C4.32002 6.44559 4.49702 6.8729 4.81208 7.18796C5.12715 7.50303 5.55446 7.68002 6.00002 7.68002C6.44559 7.68002 6.8729 7.50303 7.18796 7.18796C7.50303 6.8729 7.68002 6.44559 7.68002 6.00002C7.68002 5.55446 7.50303 5.12715 7.18796 4.81208C6.8729 4.49702 6.44559 4.32002 6.00002 4.32002Z" fill="white" />
                    </svg>
                </div>
                <div class="icon-bg">
                    <svg width="15" height="15" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.7188 1.44741C11.2914 1.63647 10.8382 1.76066 10.3742 1.81589C10.8631 1.52309 11.2289 1.06255 11.4035 0.520054C10.9443 0.793334 10.4408 0.984854 9.91667 1.08845C9.56421 0.711338 9.09703 0.461233 8.58777 0.377022C8.0785 0.29281 7.55568 0.379209 7.10058 0.622788C6.64548 0.866367 6.28361 1.25348 6.07122 1.72394C5.85882 2.1944 5.80781 2.72185 5.92611 3.22429C4.9948 3.1777 4.08369 2.93574 3.25197 2.51414C2.42024 2.09253 1.68648 1.50071 1.09835 0.777094C0.890193 1.13463 0.780806 1.54106 0.781391 1.95477C0.781391 2.76677 1.19523 3.48413 1.82299 3.90413C1.45116 3.89241 1.08751 3.79199 0.762351 3.61125V3.63981C0.762334 4.1807 0.94941 4.70495 1.29185 5.12363C1.63429 5.54231 2.11101 5.82966 2.64115 5.93693C2.29599 6.03057 1.93404 6.04436 1.58275 5.97725C1.73223 6.44283 2.02359 6.85 2.41603 7.14172C2.80847 7.43344 3.28233 7.5951 3.77123 7.60405C3.28535 7.98567 2.72901 8.26775 2.13402 8.43418C1.53903 8.60061 0.917072 8.64811 0.303711 8.57397C1.37427 9.26243 2.62049 9.62793 3.89331 9.62677C8.20195 9.62677 10.5573 6.05789 10.5573 2.96277C10.5573 2.86197 10.5551 2.76005 10.5506 2.65981C11.0089 2.32849 11.4045 1.91757 11.7188 1.44741Z" fill="white" />
                    </svg>
                </div>
                <div class="icon-bg">
                    <svg width="15" height="15" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.9002 0.699951C12.2715 0.699951 12.6276 0.847451 12.8901 1.11C13.1527 1.37255 13.3002 1.72865 13.3002 2.09995V11.9C13.3002 12.2713 13.1527 12.6273 12.8901 12.8899C12.6276 13.1525 12.2715 13.3 11.9002 13.3H2.1002C1.72889 13.3 1.3728 13.1525 1.11025 12.8899C0.847695 12.6273 0.700195 12.2713 0.700195 11.9V2.09995C0.700195 1.72865 0.847695 1.37255 1.11025 1.11C1.3728 0.847451 1.72889 0.699951 2.1002 0.699951H11.9002ZM11.5502 11.55V7.83995C11.5502 7.23473 11.3098 6.65429 10.8818 6.22633C10.4539 5.79838 9.87342 5.55795 9.2682 5.55795C8.67319 5.55795 7.9802 5.92195 7.6442 6.46795V5.69095H5.6912V11.55H7.6442V8.09895C7.6442 7.55995 8.0782 7.11895 8.6172 7.11895C8.87711 7.11895 9.12637 7.2222 9.31016 7.40599C9.49395 7.58977 9.5972 7.83904 9.5972 8.09895V11.55H11.5502ZM3.4162 4.59195C3.72809 4.59195 4.02721 4.46805 4.24775 4.24751C4.4683 4.02697 4.5922 3.72785 4.5922 3.41595C4.5922 2.76495 4.0672 2.23295 3.4162 2.23295C3.10244 2.23295 2.80154 2.35759 2.57969 2.57944C2.35783 2.8013 2.2332 3.1022 2.2332 3.41595C2.2332 4.06695 2.7652 4.59195 3.4162 4.59195ZM4.3892 11.55V5.69095H2.4502V11.55H4.3892Z" fill="white" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <!-- nav first section end -->

    <!-- nav second section start -->

    <div class="px-4 py-4 d-lg-block d-md-block d-none">
        <div class="d-flex align-items-center justify-content-between flex-wrap">
            <div>
                <img class="w-100" src="assets/images/header/Logo_one.png" alt="logo">
            </div>
            <div class="search-bar d-flex align-items-center justify-content-around gap-2">
                <div class="d-flex align-items-center gap-3">
                    <select class="form-select search-select light-gray fs-14 fw-400 arial" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <svg width="1" height="25" viewBox="0 0 1 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 0.5V25" stroke="#CFD8DD" />
                    </svg>
                </div>

                <div>
                    <input class="search-input-box light-gray fs-14 fw-400 arial" type="text" placeholder="Search in Pharmalink">
                    <button class="search-button"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.15625 14.0625C11.4182 14.0625 14.0625 11.4182 14.0625 8.15625C14.0625 4.89432 11.4182 2.25 8.15625 2.25C4.89432 2.25 2.25 4.89432 2.25 8.15625C2.25 11.4182 4.89432 14.0625 8.15625 14.0625Z" stroke="#979797" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.3325 12.3328L15.7497 15.7501" stroke="#979797" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="d-flex align-items-center gap-2">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.25 9.58333C27.3551 9.58333 28.4149 10.0223 29.1963 10.8037C29.9777 11.5851 30.4167 12.6449 30.4167 13.75M26.25 1.25C29.5652 1.25 32.7446 2.56696 35.0888 4.91117C37.433 7.25537 38.75 10.4348 38.75 13.75M5.41667 3.33333H13.75L17.9167 13.75L12.7083 16.875C14.9395 21.399 18.601 25.0605 23.125 27.2917L26.25 22.0833L36.6667 26.25V34.5833C36.6667 35.6884 36.2277 36.7482 35.4463 37.5296C34.6649 38.311 33.6051 38.75 32.5 38.75C24.3735 38.2561 16.7087 34.8052 10.9517 29.0483C5.1948 23.2913 1.74385 15.6265 1.25 7.5C1.25 6.39493 1.68899 5.33512 2.47039 4.55372C3.25179 3.77232 4.3116 3.33333 5.41667 3.33333Z" stroke="#F24535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div>
                    <p class="light-black fw-700 fs-24 teko mb-0">Call Us Now!</p>
                    <p class="fs-14 fw-400 light-black mb-0">080-6960 9999 (30 Lines)</p>
                </div>
            </div>
        </div>
    </div>

    <!-- nav second section end -->

    <!-- nav three section start -->

    <div class="main-nav-bg px-4 ">
        <div class="d-flex align-items-lg-center align-items-md-center align-items-start justify-content-between flex-wrap flex-lg-row flex-column">
            <div class="d-flex align-items-center flex-wrap gap-lg-5 flex-lg-row flex-column">
                <div class="d-flex align-items-center">
                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 7.75H3C2.59 7.75 2.25 7.41 2.25 7C2.25 6.59 2.59 6.25 3 6.25H21C21.41 6.25 21.75 6.59 21.75 7C21.75 7.41 21.41 7.75 21 7.75Z" fill="white" />
                            <path d="M18 12.75H6C5.59 12.75 5.25 12.41 5.25 12C5.25 11.59 5.59 11.25 6 11.25H18C18.41 11.25 18.75 11.59 18.75 12C18.75 12.41 18.41 12.75 18 12.75Z" fill="white" />
                            <path d="M14 17.75H10C9.59 17.75 9.25 17.41 9.25 17C9.25 16.59 9.59 16.25 10 16.25H14C14.41 16.25 14.75 16.59 14.75 17C14.75 17.41 14.41 17.75 14 17.75Z" fill="white" />
                        </svg>
                    </div>
                    <div>
                        <div class="dropdown">
                            <div class="d-flex  align-items-center dropdown-toggle" id="main-nav-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <button class="btn main-nav-dropdown d-flex flex-column text-white" type="button">
                                    <span class="arial fs-12 fw-400">Shop By</span><span class="arial fs-14 fw-700">Category</span>
                                </button>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.00001 11.2C7.53335 11.2 7.06668 11.02 6.71335 10.6667L2.36668 6.31999C2.17335 6.12666 2.17335 5.80666 2.36668 5.61332C2.56001 5.41999 2.88001 5.41999 3.07335 5.61332L7.42001 9.95999C7.74001 10.28 8.26001 10.28 8.58001 9.95999L12.9267 5.61332C13.12 5.41999 13.44 5.41999 13.6333 5.61332C13.8267 5.80666 13.8267 6.12666 13.6333 6.31999L9.28668 10.6667C8.93335 11.02 8.46668 11.2 8.00001 11.2Z" fill="white" />
                                </svg>
                            </div>

                            <ul class="dropdown-menu side-nav-dropdown" aria-labelledby="main-nav-drop">
                                <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 text-white" href="#">All Products</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="dropend">
                                    <a class="dropdown-toggle dropdown-item d-flex justify-content-between text-uppercase nav-lis arial fw-400 fs-12 text-white text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>Brands</span>
                                        <svg class="nav-svg" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.45505 10.335C4.36005 10.335 4.26505 10.3 4.19005 10.225C4.04505 10.08 4.04505 9.84001 4.19005 9.69501L7.45005 6.43501C7.69005 6.19501 7.69005 5.80501 7.45005 5.56501L4.19005 2.30501C4.04505 2.16001 4.04505 1.92001 4.19005 1.77501C4.33505 1.63001 4.57505 1.63001 4.72005 1.77501L7.98005 5.03501C8.23505 5.29001 8.38005 5.63501 8.38005 6.00001C8.38005 6.36501 8.24005 6.71001 7.98005 6.96501L4.72005 10.225C4.64505 10.295 4.55005 10.335 4.45505 10.335Z" fill="#414141" />
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu side-inside-menu">
                                        <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ABBOTT-XL</a></li>
                                        <li>
                                            <hr class="dropdown-divider divider-two ">
                                        </li>
                                        <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ALAMBIC</a></li>
                                        <li>
                                            <hr class="dropdown-divider divider-two">
                                        </li>
                                        <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ALKEM</a></li>
                                        <li>
                                            <hr class="dropdown-divider divider-two">
                                        </li>
                                        <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">B-TEX</a></li>

                                    </ul>
                                </li>
                                <hr class="dropdown-divider">
                                </li>
                                <li class="dropend">
                                    <a class="dropdown-toggle dropdown-item d-flex justify-content-between text-uppercase nav-lis arial fw-400 fs-12 text-white text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>Categories</span>
                                        <svg class="nav-svg" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.45505 10.335C4.36005 10.335 4.26505 10.3 4.19005 10.225C4.04505 10.08 4.04505 9.84001 4.19005 9.69501L7.45005 6.43501C7.69005 6.19501 7.69005 5.80501 7.45005 5.56501L4.19005 2.30501C4.04505 2.16001 4.04505 1.92001 4.19005 1.77501C4.33505 1.63001 4.57505 1.63001 4.72005 1.77501L7.98005 5.03501C8.23505 5.29001 8.38005 5.63501 8.38005 6.00001C8.38005 6.36501 8.24005 6.71001 7.98005 6.96501L4.72005 10.225C4.64505 10.295 4.55005 10.335 4.45505 10.335Z" fill="#414141" />
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu side-inside-menu">
                                        <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ABBOTT-XL</a></li>
                                        <li>
                                            <hr class="dropdown-divider divider-two ">
                                        </li>
                                        <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ALAMBIC</a></li>
                                        <li>
                                            <hr class="dropdown-divider divider-two">
                                        </li>
                                        <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ALKEM</a></li>
                                        <li>
                                            <hr class="dropdown-divider divider-two">
                                        </li>
                                        <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">B-TEX</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="dropend">
                                    <a class="dropdown-toggle dropdown-item d-flex justify-content-between text-uppercase nav-lis arial fw-400 fs-12 text-white text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>Offers</span>
                                        <svg class="nav-svg" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.45505 10.335C4.36005 10.335 4.26505 10.3 4.19005 10.225C4.04505 10.08 4.04505 9.84001 4.19005 9.69501L7.45005 6.43501C7.69005 6.19501 7.69005 5.80501 7.45005 5.56501L4.19005 2.30501C4.04505 2.16001 4.04505 1.92001 4.19005 1.77501C4.33505 1.63001 4.57505 1.63001 4.72005 1.77501L7.98005 5.03501C8.23505 5.29001 8.38005 5.63501 8.38005 6.00001C8.38005 6.36501 8.24005 6.71001 7.98005 6.96501L4.72005 10.225C4.64505 10.295 4.55005 10.335 4.45505 10.335Z" fill="#414141" />
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu side-inside-menu">
                                        <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ABBOTT-XL</a></li>
                                        <li>
                                            <hr class="dropdown-divider divider-two ">
                                        </li>
                                        <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ALAMBIC</a></li>
                                        <li>
                                            <hr class="dropdown-divider divider-two">
                                        </li>
                                        <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ALKEM</a></li>
                                        <li>
                                            <hr class="dropdown-divider divider-two">
                                        </li>
                                        <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">B-TEX</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <ul class="nav-bar-main-menus d-flex align-items-lg-center align-items-md-center align-items-start gap-lg-5 flex-lg-row flex-column flex-wrap list-unstyled mb-0">
                        <li class="arial fw-700 fs-14 text-white text-uppercase py-4">Home</li>
                        <li class="dropend-two">
                            <a class="dropdown-toggle dropdown-item d-flex gap-2 align-items-center py-4 justify-content-between text-uppercase nav-lis arial fw-700 fs-14 text-white text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Products</span>
                                <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6L8 0L0 0L4 6Z" fill="white" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu side-inside-menu-two p-2">
                                <div class="dropdown-search my-2">
                                    <input class="search-input-box-two light-gray fs-14 fw-400 arial" type="text" placeholder="Search by product name">
                                    <button class="search-button"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.15625 14.0625C11.4182 14.0625 14.0625 11.4182 14.0625 8.15625C14.0625 4.89432 11.4182 2.25 8.15625 2.25C4.89432 2.25 2.25 4.89432 2.25 8.15625C2.25 11.4182 4.89432 14.0625 8.15625 14.0625Z" stroke="#979797" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12.3325 12.3328L15.7497 15.7501" stroke="#979797" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ABBOTT-XL</a></li>
                                <li>
                                    <hr class="dropdown-divider divider-two ">
                                </li>
                                <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ALAMBIC</a></li>
                                <li>
                                    <hr class="dropdown-divider divider-two">
                                </li>
                                <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ALKEM</a></li>
                                <li>
                                    <hr class="dropdown-divider divider-two">
                                </li>
                                <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">B-TEX</a></li>

                            </ul>
                        </li>
                        <li class="dropend-three">
                            <a class="dropdown-toggle dropdown-item d-flex gap-2 align-items-center py-4 justify-content-between text-uppercase nav-lis arial fw-700 fs-14 text-white text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Brands</span>
                                <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6L8 0L0 0L4 6Z" fill="white" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu side-inside-menu-three p-2">
                                <div class="row">
                                    <div class="col-lg-2 col-4 px-1">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_one.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_two.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_three.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_four.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_five.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_five.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1 mt-2">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_one.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1 mt-2">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_two.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1 mt-2">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_three.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1 mt-2">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_four.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1 mt-2">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_five.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1 mt-2">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_five.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1 mt-2">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_one.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1 mt-2">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_two.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1 mt-2">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_three.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1 mt-2">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_four.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1 mt-2">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_five.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-4 px-1 mt-2">
                                        <div class="text-center brand-nav-bg">
                                            <img class="w-40" src="assets/images/brands/brand_five.png" alt="brand_image">
                                            <p class="arial fw-400 fs-8 light-black mb-0">ABBOTT-XL</p>
                                            <p class="arial fw-400 fs-6 light-gray mb-0">ABBOTT-XL</p>
                                        </div>
                                    </div>

                                </div>
                            </ul>
                        </li>
                        <li class="dropend-four">
                            <a class="dropdown-toggle dropdown-item d-flex gap-2 align-items-center py-4 justify-content-between text-uppercase nav-lis arial fw-700 fs-14 text-white text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Categories</span>
                                <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6L8 0L0 0L4 6Z" fill="white" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu side-inside-menu-two p-3">
                                <div class="row">
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_one.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_two.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_three.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_one.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_two.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_three.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_one.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_two.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_three.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_one.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_two.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_three.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_one.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_two.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_three.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_one.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_two.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                    <div class="col-lg-2 col-4 d-flex flex-column align-items-center justify-content-center">
                                        <div class="brand-imag-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/brands/product_three.png" alt="product-image">
                                        </div>
                                        <p class="inter fw-500 fs-8 black_color my-1  ">Tablets</p>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="dropend-two">
                            <a class="dropdown-toggle dropdown-item d-flex gap-2 align-items-center py-4 justify-content-between text-uppercase nav-lis arial fw-700 fs-14 text-white text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Offers</span>
                                <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6L8 0L0 0L4 6Z" fill="white" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu side-inside-menu-two p-2">

                                <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ABBOTT-XL</a></li>
                                <li>
                                    <hr class="dropdown-divider divider-two ">
                                </li>
                                <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ALAMBIC</a></li>
                                <li>
                                    <hr class="dropdown-divider divider-two">
                                </li>
                                <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ALKEM</a></li>
                                <li>
                                    <hr class="dropdown-divider divider-two">
                                </li>
                                <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">B-TEX</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="d-flex align-items-lg-center align-items-md-center align-items-start justify-content-between flex-wrap gap-lg-5 flex-lg-row flex-column">
                <div class="">
                    <div class="account-dropdown">
                        <a class="dropdown-toggle dropdown-item d-flex gap-2 align-items-center py-4 justify-content-between  nav-lis arial fw-700 fs-14 text-white text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="d-flex flex-column">
                                <span class="arial fs-12 fw-400">Sign in</span>
                                <span class="arial fs-14 fw-700">My Account</span>
                            </div>

                            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 0L0 0L4 6Z" fill="white" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu side-inside-menu-two p-2">

                            <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ABBOTT-XL</a></li>
                            <li>
                                <hr class="dropdown-divider divider-two ">
                            </li>
                            <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ALAMBIC</a></li>
                            <li>
                                <hr class="dropdown-divider divider-two">
                            </li>
                            <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ALKEM</a></li>
                            <li>
                                <hr class="dropdown-divider divider-two">
                            </li>
                            <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">B-TEX</a></li>

                        </ul>
                    </div>
                </div>
                <div>
                    <div class="cart-dropdown">
                        <a class="dropdown-toggle dropdown-item d-flex gap-2 align-items-center py-4 justify-content-between  nav-lis arial fw-700 fs-14 text-white text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.19 17.75H7.53999C6.54999 17.75 5.59999 17.33 4.92999 16.6C4.25999 15.87 3.92 14.89 4 13.9L4.83 3.94C4.86 3.63 4.74999 3.33001 4.53999 3.10001C4.32999 2.87001 4.04 2.75 3.73 2.75H2C1.59 2.75 1.25 2.41 1.25 2C1.25 1.59 1.59 1.25 2 1.25H3.74001C4.47001 1.25 5.15999 1.56 5.64999 2.09C5.91999 2.39 6.12 2.74 6.23 3.13H18.72C19.73 3.13 20.66 3.53 21.34 4.25C22.01 4.98 22.35 5.93 22.27 6.94L21.73 14.44C21.62 16.27 20.02 17.75 18.19 17.75ZM6.28 4.62L5.5 14.02C5.45 14.6 5.64 15.15 6.03 15.58C6.42 16.01 6.95999 16.24 7.53999 16.24H18.19C19.23 16.24 20.17 15.36 20.25 14.32L20.79 6.82001C20.83 6.23001 20.64 5.67001 20.25 5.26001C19.86 4.84001 19.32 4.60999 18.73 4.60999H6.28V4.62Z" fill="white" />
                                <path d="M16.25 22.75C15.15 22.75 14.25 21.85 14.25 20.75C14.25 19.65 15.15 18.75 16.25 18.75C17.35 18.75 18.25 19.65 18.25 20.75C18.25 21.85 17.35 22.75 16.25 22.75ZM16.25 20.25C15.97 20.25 15.75 20.47 15.75 20.75C15.75 21.03 15.97 21.25 16.25 21.25C16.53 21.25 16.75 21.03 16.75 20.75C16.75 20.47 16.53 20.25 16.25 20.25Z" fill="white" />
                                <path d="M8.25 22.75C7.15 22.75 6.25 21.85 6.25 20.75C6.25 19.65 7.15 18.75 8.25 18.75C9.35 18.75 10.25 19.65 10.25 20.75C10.25 21.85 9.35 22.75 8.25 22.75ZM8.25 20.25C7.97 20.25 7.75 20.47 7.75 20.75C7.75 21.03 7.97 21.25 8.25 21.25C8.53 21.25 8.75 21.03 8.75 20.75C8.75 20.47 8.53 20.25 8.25 20.25Z" fill="white" />
                                <path d="M21 8.75H9C8.59 8.75 8.25 8.41 8.25 8C8.25 7.59 8.59 7.25 9 7.25H21C21.41 7.25 21.75 7.59 21.75 8C21.75 8.41 21.41 8.75 21 8.75Z" fill="white" />
                            </svg>
                            <div class="d-flex flex-column">

                                <span class="arial fs-12 fw-400">My Cart</span>
                                <span class="arial fs-14 fw-700">₹ 0.00</span>
                            </div>

                            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 0L0 0L4 6Z" fill="white" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu cart-inside-menu p-2 position-absolute right-0">
                            <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ABBOTT-XL</a></li>
                            <li>
                                <hr class="dropdown-divider divider-two ">
                            </li>
                            <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ALAMBIC</a></li>
                            <li>
                                <hr class="dropdown-divider divider-two">
                            </li>
                            <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">ALKEM</a></li>
                            <li>
                                <hr class="dropdown-divider divider-two">
                            </li>
                            <li><a class="dropdown-item text-uppercase nav-lis arial fw-400 fs-12 " href="#">B-TEX</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-close-icon d-lg-none d-md-none d-block">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="30px" height="30px">
                <path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z" />
            </svg>
        </div>
    </div>


    <!-- nav three section end -->

    <!-- mobile nav section start -->

    <div class="bg-white py-2 d-flex align-items-center justify-content-between px-2 d-lg-none d-md-none d-block position-fixed mobile-nav-section">
        <div class="mobile-nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">
                <path d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z" />
            </svg>
        </div>
        <div class="text-center">
            <img class="w-50 m-auto" src="assets/images/header/Logo_one.png" alt="logo">
        </div>
        <div>
            <svg class="mob-search-icon" width="32" height="32" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.15625 14.0625C11.4182 14.0625 14.0625 11.4182 14.0625 8.15625C14.0625 4.89432 11.4182 2.25 8.15625 2.25C4.89432 2.25 2.25 4.89432 2.25 8.15625C2.25 11.4182 4.89432 14.0625 8.15625 14.0625Z" stroke="#979797" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12.3325 12.3328L15.7497 15.7501" stroke="#979797" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="position-fixed mobile-nav">
                <input type="text" placeholder="search">
            </div>
        </div>
    </div>

    <!-- mobile nav section end -->


</section>