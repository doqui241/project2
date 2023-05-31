<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Lý</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(URL('css/dashboard.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL('css/thietbi/edit-tb.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL('css/thietbi/thietbi.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL('css/thietbi/addtb.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL('css/dichvu/adddv.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL('css/dichvu/dichvu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL('css/dichvu/editv.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL('css/capso/addcs.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL('css/capso/capso.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL('css/capso/editcs.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL('css/baocao/addbc.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL('css/baocao/baocao.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL('css/baocao/editbc.css')); ?>">
</head>
<body>   
      <div class="left" style="width:200px;">
        <div class="container mt-3 p-0">
            <img src="<?php echo e(URL('img/logo.png')); ?>" class="mx-auto d-block mt-4" width="100px"  alt="">
            <ul class="nav flex-column mt-5">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('dashboard.index')); ?>"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.3333 9.08366V3.41699C18.3333 2.16699 17.8 1.66699 16.475 1.66699H13.1083C11.7833 1.66699 11.25 2.16699 11.25 3.41699V9.08366C11.25 10.3337 11.7833 10.8337 13.1083 10.8337H16.475C17.8 10.8337 18.3333 10.3337 18.3333 9.08366Z" stroke="#A9A9B0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18.3333 16.583V15.083C18.3333 13.833 17.8 13.333 16.475 13.333H13.1083C11.7833 13.333 11.25 13.833 11.25 15.083V16.583C11.25 17.833 11.7833 18.333 13.1083 18.333H16.475C17.8 18.333 18.3333 17.833 18.3333 16.583Z" stroke="#A9A9B0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M8.75 10.917V16.5837C8.75 17.8337 8.21666 18.3337 6.89166 18.3337H3.525C2.2 18.3337 1.66666 17.8337 1.66666 16.5837V10.917C1.66666 9.66699 2.2 9.16699 3.525 9.16699H6.89166C8.21666 9.16699 8.75 9.66699 8.75 10.917Z" stroke="#A9A9B0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M8.75 3.41699V4.91699C8.75 6.16699 8.21666 6.66699 6.89166 6.66699H3.525C2.2 6.66699 1.66666 6.16699 1.66666 4.91699V3.41699C1.66666 2.16699 2.2 1.66699 3.525 1.66699H6.89166C8.21666 1.66699 8.75 2.16699 8.75 3.41699Z" stroke="#A9A9B0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                  Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('thietbi.index')); ?>"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.36666 1.66699H14.625C17.5917 1.66699 18.3333 2.40866 18.3333 5.36699V10.642C18.3333 13.6087 17.5917 14.342 14.6333 14.342H5.36666C2.40833 14.3503 1.66666 13.6087 1.66666 10.6503V5.36699C1.66666 2.40866 2.40833 1.66699 5.36666 1.66699Z" stroke="#A9A9B0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10 14.3496V18.3329" stroke="#A9A9B0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M1.66666 10.833H18.3333" stroke="#A9A9B0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6.25 18.333H13.75" stroke="#A9A9B0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                  
                  Thiết Bị</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('dichvu.index')); ?>"><svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="4.58004" cy="14.4026" r="0.708276" fill="#A9A9B0"/>
                  <circle cx="6.94094" cy="14.4016" r="0.708276" fill="#A9A9B0"/>
                  <circle cx="9.30184" cy="14.4016" r="0.708276" fill="#A9A9B0"/>
                  <g clip-path="url(#clip0_73976_3818)">
                  <path d="M13.0696 5.19043C13.5211 5.19043 13.9316 5.31846 14.2861 5.60012C14.9578 6.1415 15.0548 7.05966 14.4913 7.71078C14.316 7.91562 14.107 8.09852 13.9092 8.28142C13.6629 8.50822 13.4838 8.7533 13.4987 9.11178C13.5099 9.3715 13.2897 9.54342 13.0323 9.53611C12.7897 9.52513 12.6218 9.33858 12.6106 9.07886C12.5882 8.60332 12.7561 8.20094 13.0845 7.86075C13.3084 7.62664 13.5547 7.41814 13.7749 7.18037C14.0771 6.85847 14.01 6.4378 13.6219 6.21466C13.5024 6.14516 13.3569 6.09761 13.2151 6.07932C12.7673 6.02445 12.3643 6.15979 12.1926 6.72678C12.1217 6.96821 11.8717 7.09258 11.6403 7.02308C11.3978 6.95357 11.2709 6.72312 11.3381 6.47072C11.5396 5.68791 12.2076 5.19409 13.0696 5.19043Z" fill="#A9A9B0"/>
                  <path d="M13.0731 9.98947C13.3269 9.99679 13.5135 10.1907 13.506 10.4321C13.4986 10.6808 13.2933 10.8637 13.0358 10.8528C12.7895 10.8418 12.603 10.6443 12.6141 10.4028C12.6216 10.1614 12.8194 9.98216 13.0731 9.98947Z" fill="#A9A9B0"/>
                  </g>
                  <path d="M21 8.18601C21 10.0609 19.9887 11.7464 18.3785 12.9193C18.3228 12.9583 18.2921 13.0251 18.2893 13.092L18.2197 14.9168C18.2113 15.1619 17.9411 15.304 17.7349 15.1731L16.1888 14.2008C16.1888 14.2008 16.1888 14.2008 16.186 14.2008C16.0968 14.1423 15.9882 14.1256 15.8879 14.1562C14.9685 14.4431 13.9684 14.6019 12.9209 14.6019C12.907 14.6019 12.893 14.6019 12.8791 14.6019C12.907 14.4181 12.9209 14.2314 12.9209 14.042C12.9209 11.426 10.252 9.30594 6.95906 9.30594C6.28209 9.30594 5.63297 9.39509 5.02564 9.55946C4.90306 9.1165 4.83899 8.65404 4.83899 8.18044C4.83899 4.63398 8.45509 1.76172 12.9181 1.76172C17.3839 1.76729 21 4.64234 21 8.18601Z" stroke="#A9A9B0" stroke-width="1.5" stroke-miterlimit="10"/>
                  <path d="M5.02842 9.56445C2.68547 10.2024 1 11.9687 1 14.047C1 15.4288 1.74662 16.6741 2.93342 17.5405C2.97521 17.5711 2.99749 17.6185 3.00028 17.6686L3.05042 19.0142C3.056 19.1953 3.25658 19.2984 3.40981 19.2037L4.55203 18.4849C4.56038 18.4793 4.57153 18.471 4.57989 18.4654C4.62167 18.432 4.67739 18.4208 4.72754 18.4376C5.41844 18.6604 6.17064 18.783 6.96183 18.783C10.0152 18.783 12.5336 16.9582 12.8819 14.6069" stroke="#A9A9B0" stroke-width="1.5" stroke-miterlimit="10"/>
                  <defs>
                  <clipPath id="clip0_73976_3818">
                  <rect width="3.54138" height="5.66621" fill="white" transform="translate(11.3193 5.18945)"/>
                  </clipPath>
                  </defs>
                  </svg>
                  Dịch Vụ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('capso.index')); ?>"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_73976_3833)">
                  <path d="M1.66666 14.167L10 18.3337L18.3333 14.167" stroke="#A9A9B0" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M1.66666 10L10 14.1667L18.3333 10" stroke="#A9A9B0" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10 1.66699L1.66666 5.83366L10 10.0003L18.3333 5.83366L10 1.66699Z" stroke="#A9A9B0" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_73976_3833">
                  <rect width="20" height="20" fill="white"/>
                  </clipPath>
                  </defs>
                  </svg>
                  Cấp Số</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('baocao.index')); ?>"><svg  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="fill: #A9A9B0;transform: ;msFilter:;"><path d="m20 8-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8zM9 19H7v-9h2v9zm4 0h-2v-6h2v6zm4 0h-2v-3h2v3zM14 9h-1V4l5 5h-4z"></path></svg>
                  
                  
                  Báo Cáo</a>
              </li>
              <li class="nav-item p-0">
                <div class="dropdown dropend ">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.68578 18.0437L8.68301 18.0421L4.11493 15.4093C3.16175 14.7663 2.78258 14.4693 2.59073 14.1388C2.40772 13.8237 2.36667 13.4258 2.36667 12.4087V7.59199C2.36667 6.57339 2.40559 6.17441 2.58449 5.86024C2.77032 5.53392 3.13834 5.24176 4.07395 4.60765L8.67509 1.94996L8.67617 1.94933C9.02135 1.74879 9.49263 1.63574 9.9875 1.63574C10.4824 1.63574 10.9537 1.74879 11.2988 1.94933L11.3004 1.95024L15.8851 4.59142C16.8383 5.23437 17.2174 5.5314 17.4093 5.86181C17.5923 6.177 17.6333 6.57483 17.6333 7.59199V12.4003C17.6333 13.4189 17.5944 13.8179 17.4155 14.1321C17.2297 14.4584 16.8617 14.7506 15.9261 15.3847L11.3261 18.0417C11.3259 18.0418 11.3257 18.0419 11.3255 18.042C10.9669 18.2477 10.4907 18.3587 10 18.3587C9.50799 18.3587 9.03359 18.2472 8.68578 18.0437ZM4.23307 4.81747L4.21803 4.82616L4.20364 4.83587L4.18752 4.84675C3.86164 5.06666 3.59376 5.24744 3.38776 5.41047C3.17516 5.57872 2.99255 5.7551 2.86229 5.97965C2.72902 6.2094 2.67395 6.44876 2.64865 6.70466C2.62498 6.94414 2.62499 7.23234 2.625 7.56891L2.625 7.59199V12.4003L2.625 12.4238C2.62499 12.76 2.62498 13.0487 2.64928 13.2892C2.67533 13.5468 2.73203 13.7872 2.86795 14.0184C3.00031 14.2434 3.18561 14.4215 3.40206 14.5926C3.61237 14.7588 3.88614 14.9441 4.22055 15.1703L4.23646 15.1811L4.2513 15.1911L4.26681 15.2001L8.81681 17.8251L8.81702 17.8252C9.16297 18.0246 9.60364 18.1045 10.0042 18.1045C10.4047 18.1045 10.8454 18.0246 11.1913 17.8252L11.1919 17.8249L15.7753 15.1748L15.7909 15.1658L15.8059 15.1556L15.822 15.1447C16.1458 14.9248 16.4121 14.744 16.6169 14.5809C16.8284 14.4125 17.01 14.236 17.1394 14.0115C17.2718 13.782 17.3264 13.5429 17.3515 13.2874C17.375 13.048 17.375 12.76 17.375 12.4233V12.4003V7.59199V7.56856C17.375 7.23229 17.375 6.94359 17.3507 6.70316C17.3247 6.44552 17.268 6.20512 17.132 5.97396C16.9997 5.74887 16.8144 5.57082 16.5979 5.39973C16.3876 5.23349 16.1138 5.04824 15.7794 4.82195L15.7635 4.81122L15.7487 4.80118L15.7332 4.79223L11.1862 2.16898C11.1857 2.16867 11.1851 2.16836 11.1846 2.16805C10.8382 1.96552 10.3984 1.89199 10 1.89199C9.60156 1.89199 9.1617 1.96554 8.81523 2.16814L4.23307 4.81747Z" stroke="#A9A9B0"/>
                    <path d="M10 12.625C8.55114 12.625 7.375 11.4489 7.375 10C7.375 8.55114 8.55114 7.375 10 7.375C11.4489 7.375 12.625 8.55114 12.625 10C12.625 11.4489 11.4489 12.625 10 12.625ZM10 7.625C8.69052 7.625 7.625 8.69052 7.625 10C7.625 11.3095 8.69052 12.375 10 12.375C11.3095 12.375 12.375 11.3095 12.375 10C12.375 8.69052 11.3095 7.625 10 7.625Z" fill="#292D32" stroke="#A9A9B0"/>
                    </svg>Cài Đặt Hệ Thống :</a>
                  
                  <ul class="dropdown-menu p-0">
                    <li><a class="dropdown-item" href="#">Quản lý vai trò</a></li>
                    <li><a class="dropdown-item" href="#">Quản lý tài khoản</a></li>
                    <li><a class="dropdown-item" href="#">Nhật ký người dùng</a></li>
                  </ul>
                </div>
               
                
              </li>
            </ul>
            <div class="loguot">
              <form action="" method="post">
                <?php echo csrf_field(); ?>
                <button class="btn mx-auto d-block mb-3"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.3333 14.1663L17.5 9.99967L13.3333 5.83301" stroke="#FF7506" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M17.5 10H7.5" stroke="#FF7506" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M7.5 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H7.5" stroke="#FF7506" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>Đăng Xuất
                   </button>
              </form>
              
          </div>
          </div>
          
        </div>
        
       
    </div>
    <div class="noidung bg-light">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
   

    

    
    <div class="user">
      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="32" height="32" rx="16" fill="#FFF2E7"/>
        <path d="M22.1167 18.0753L21.2833 16.692C21.1083 16.3837 20.95 15.8003 20.95 15.4587V13.3503C20.95 11.392 19.8 9.70033 18.1417 8.90866C17.7083 8.14199 16.9083 7.66699 15.9917 7.66699C15.0833 7.66699 14.2667 8.15866 13.8333 8.93366C12.2083 9.74199 11.0833 11.417 11.0833 13.3503V15.4587C11.0833 15.8003 10.925 16.3837 10.75 16.6837L9.90833 18.0753C9.57499 18.6337 9.49999 19.2503 9.70833 19.817C9.90833 20.3753 10.3833 20.8087 11 21.017C12.6167 21.567 14.3167 21.8337 16.0167 21.8337C17.7167 21.8337 19.4167 21.567 21.0333 21.0253C21.6167 20.8337 22.0667 20.392 22.2833 19.817C22.5 19.242 22.4417 18.6087 22.1167 18.0753Z" fill="#FFAC6A"/>
        <path d="M18.3584 22.6753C18.0084 23.642 17.0834 24.3337 16 24.3337C15.3417 24.3337 14.6917 24.067 14.2334 23.592C13.9667 23.342 13.7667 23.0087 13.65 22.667C13.7584 22.6837 13.8667 22.692 13.9834 22.7087C14.175 22.7337 14.375 22.7587 14.575 22.7753C15.05 22.817 15.5334 22.842 16.0167 22.842C16.4917 22.842 16.9667 22.817 17.4334 22.7753C17.6084 22.7587 17.7834 22.7503 17.95 22.7253C18.0834 22.7087 18.2167 22.692 18.3584 22.6753Z" fill="#FFAC6A"/>
        </svg>
        
      <div class="avata">
        <a href="<?php echo e(route('dashboard.create')); ?>"><img src="<?php echo e(URL('img/avata.jpg')); ?>" alt=""></a>
        
      </div>
      <p>Xin Chào</p>
      <div class="tennd">
        <?php echo e(Auth::User()->name); ?>

      </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Alta\quanly\resources\views/dashboard.blade.php ENDPATH**/ ?>