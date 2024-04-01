@props(['href'=> '#','title'=>'Chat Now'])
<div class="fixed z-50  flex  w-full bottom-24 ">
    <div class="">
        <div class="flex flex-col  absolute ">
        <a href="{{ $href }}" class="flex ltr:flex-row rtl:flex-row-reverse items-center gap-2 bg-darkorange rounded-full font-helvetica text-white py-3 px-4 shadow-2xl">
            <span class="fill-current text-darkorange bg-white border border-white rounded-full w-8 h-8">
                <x-easyadmin::display.icon icon="icons.whatsapp_icon" height="h-7" width="w-7"/>
            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="items-center h-6 w-5 fill-current stroke-current " width="1656" height="1547" viewBox="0 0 1656 1547" version="1.1"><path d="M 823 135.041 C 821.075 135.512, 810.050 137.069, 798.500 138.500 C 769.564 142.086, 760.599 143.478, 743.457 147.043 C 645.362 167.442, 556.354 209.198, 480.500 270.403 C 447.273 297.212, 408.143 336.932, 379.719 372.701 C 312.339 457.495, 270.073 550.796, 252.987 652.464 C 238.329 739.683, 242.302 839.869, 263.636 920.966 C 275.218 964.992, 288.627 999.694, 311.322 1044.376 C 322.676 1066.731, 323.471 1068.675, 323.792 1074.876 C 324.126 1081.335, 322.877 1085.252, 273.567 1232.399 C 230.024 1362.338, 223 1384.101, 223 1389.084 C 223 1396.152, 223.906 1398.685, 228.174 1403.546 C 232.366 1408.320, 238.125 1410.950, 244.448 1410.978 C 247.821 1410.993, 296.083 1398.691, 395.948 1372.360 C 476.552 1351.108, 549.925 1331.773, 559 1329.394 C 584.107 1322.810, 589.697 1323.295, 613.910 1334.152 C 678.429 1363.081, 738.915 1379.514, 811 1387.698 C 833.271 1390.226, 907.326 1390.223, 930.500 1387.692 C 1079.319 1371.440, 1198.032 1317.515, 1303.185 1218.399 C 1358.972 1165.815, 1402.605 1107.171, 1435.547 1040.500 C 1449.306 1012.653, 1457.482 992.702, 1467.510 962.500 C 1481.308 920.947, 1488.957 887.571, 1495.980 838.282 L 1500 810.064 1500 763.129 C 1500 716.387, 1499.987 716.102, 1496.956 693.847 C 1489.415 638.498, 1482.128 604.898, 1468.807 564.069 C 1432.689 453.357, 1362.913 352.233, 1269 274.495 C 1204.115 220.786, 1124.722 179.897, 1040.712 156.923 C 1018.961 150.975, 1000.058 147.222, 968 142.488 C 954.525 140.499, 937.875 137.887, 931 136.685 C 919.478 134.671, 914.902 134.488, 872.500 134.343 C 847.200 134.256, 824.925 134.570, 823 135.041 M 852 178.035 C 728.181 183.900, 616.861 222.649, 524.500 292.033 C 499.921 310.498, 480.363 327.767, 456.995 351.639 C 365.370 445.238, 310.007 556.969, 293.549 681.500 C 289.880 709.260, 288.972 721.404, 288.317 751.500 C 286.187 849.340, 307.564 941.419, 352.276 1027 C 367.707 1056.536, 368.990 1059.304, 370.118 1065.500 C 372.048 1076.106, 370.818 1081.204, 354.898 1128.611 C 320.327 1231.553, 279 1355.545, 279 1356.323 C 279 1357.499, 274.462 1358.603, 394 1328.336 C 704.925 1249.609, 735.347 1242.248, 753.500 1241.342 C 761.562 1240.940, 762.912 1241.134, 766.458 1243.205 C 777.910 1249.893, 780.481 1265.688, 771.739 1275.645 C 770.062 1277.555, 766.847 1280.062, 764.595 1281.216 C 762.258 1282.414, 740.007 1287.894, 712.755 1293.985 C 686.496 1299.854, 664.671 1304.995, 664.257 1305.410 C 662.783 1306.884, 667.419 1308.927, 686.835 1315.360 C 805.896 1354.807, 922.403 1356.276, 1044.500 1319.870 C 1107.215 1301.170, 1168.912 1270.184, 1220.334 1231.561 C 1248.037 1210.752, 1282.607 1178.807, 1305.609 1152.760 C 1342.635 1110.832, 1374.345 1064.248, 1397.935 1017.125 C 1430.673 951.732, 1448.953 885.970, 1455.091 811.500 C 1456.664 792.415, 1456.659 745.159, 1455.081 725 C 1445.804 606.451, 1408.441 502.424, 1344.100 416 C 1315.397 377.446, 1277.068 338.222, 1237 306.400 C 1122.654 215.586, 990.373 171.482, 852 178.035 M 628.500 347.656 C 609.320 351.747, 596.792 360.064, 570.169 386.386 C 528.069 428.009, 512.691 447.585, 498.072 478.164 C 485.420 504.627, 479.429 529.951, 478.355 561.500 C 477.873 575.651, 478.113 579.349, 480.428 593.500 C 489.886 651.297, 514.576 703.281, 555.942 752.492 C 568.923 767.935, 611.827 811.846, 719.485 919.869 C 829.560 1030.318, 861.798 1061.908, 879.332 1076.500 C 925.820 1115.190, 981.143 1142.822, 1031.851 1152.679 C 1044.120 1155.064, 1047.876 1155.341, 1069 1155.416 C 1093.596 1155.504, 1098.951 1154.948, 1117.143 1150.420 C 1139.950 1144.743, 1162.351 1134.601, 1184.082 1120.113 C 1212.865 1100.925, 1235.597 1079.906, 1266.401 1044 C 1283.936 1023.561, 1289.776 1008.991, 1288.647 988.500 C 1287.663 970.657, 1283.222 959.562, 1269.833 941.500 C 1250.005 914.752, 1238.822 903.730, 1208.124 880.683 C 1170.972 852.790, 1128.262 825.340, 1115.473 821.136 C 1100.269 816.138, 1083.505 817.509, 1068.327 824.992 C 1058.718 829.728, 1051.152 836.723, 1042.894 848.503 C 1037.058 856.829, 1014.273 881.456, 1006.169 888.198 C 987.349 903.855, 962.047 904.900, 940.377 890.915 C 933.897 886.733, 916.162 869.490, 840.353 793.666 C 743.217 696.509, 741.506 694.651, 735.894 680.207 C 732.518 671.517, 732.098 656.588, 734.988 648 C 740.057 632.939, 747.333 624.508, 777.500 598.739 C 789.050 588.873, 800.480 578.483, 802.901 575.650 C 808.294 569.339, 812.629 560.372, 814.079 552.531 C 815.886 542.756, 812.301 518.450, 807.111 505.282 C 802.100 492.568, 772.645 446.994, 755.717 425.761 C 733.658 398.093, 709.708 374.376, 691.380 362.051 C 670.672 348.125, 649.271 343.226, 628.500 347.656 M 631.730 392.358 C 628.557 393.697, 624.282 396.046, 622.230 397.578 C 613.445 404.139, 573.739 444.909, 561.257 460.186 C 521.688 508.616, 512.137 564.794, 533.243 624.964 C 546.602 663.049, 567.195 697.555, 598.912 735 C 619.665 759.500, 862.389 1003.166, 889.083 1026.296 C 923.223 1055.878, 949.405 1073.634, 982.304 1089.516 C 1003.844 1099.916, 1023.401 1106.347, 1045 1110.135 C 1057.537 1112.334, 1084.436 1111.854, 1097.728 1109.195 C 1142.559 1100.224, 1179.655 1075.060, 1226.771 1021.659 C 1241.910 1004.501, 1244.267 1000.361, 1244.283 990.911 C 1244.299 981.453, 1241.366 975.893, 1227.970 959.985 C 1201.413 928.450, 1184.130 914.603, 1125 877.484 C 1101.642 862.821, 1098.659 861.476, 1092.916 863.023 C 1087.426 864.501, 1083.835 867.953, 1068.593 886.405 C 1051.960 906.542, 1037.242 920.663, 1025.018 928.211 L 1015.769 933.922 1019.135 935.451 C 1022.765 937.100, 1042.113 942.029, 1064.392 946.979 C 1072.032 948.677, 1080.466 951.005, 1083.133 952.153 C 1097.918 958.513, 1101.319 976.999, 1089.678 987.729 C 1081.437 995.325, 1076.154 995.541, 1046.500 989.492 C 997.843 979.566, 956.140 960.790, 919.500 932.313 C 914.550 928.465, 903.750 919.013, 895.500 911.307 C 857.409 875.728, 710.959 727.063, 697.685 710.500 C 672.473 679.040, 654.536 643.714, 645.949 608.605 C 642.101 592.877, 639.733 576.554, 640.569 571.530 C 643.709 552.660, 665.512 545.430, 677.636 559.238 C 681.602 563.756, 682.509 566.491, 689.486 595 C 692.650 607.925, 695.540 619.063, 695.910 619.752 C 696.330 620.535, 697.956 618.662, 700.249 614.752 C 709.102 599.657, 720.217 588.186, 750.899 562.475 C 759.368 555.378, 767.622 547.755, 769.240 545.536 C 773.336 539.916, 772.771 534.633, 767.022 524.816 C 751.031 497.507, 732.007 468.914, 716.606 449.040 C 701.358 429.365, 669.314 399.425, 657.068 393.413 C 649.029 389.466, 639.522 389.071, 631.730 392.358" stroke="none" fill="current" fill-rule="evenodd"/><path d="" stroke="none" fill="current" fill-rule="evenodd"/></svg> -->
            </span>
            <p class="text-white font-helvetica text-lg ">{{$title}}</p>
            
        </a>
        </div>
    </div>
    
</div>