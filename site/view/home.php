<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hanoi Metro Navigation</title>
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/perfect-scrollbar.min.css">
  <link rel="stylesheet" href="public/css/font-awesome.min.css">
  <link rel="stylesheet" href="public/css/jquery-ui.min.css">

  <link rel="stylesheet" href="public/css/style.css">
  <script rel="script" type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
  <script rel="script" type="text/javascript" src="public/js/panzoom/jquery.panzoom.min.js"></script>
  <script rel="script" type="text/javascript" src="public/js/panzoom/jquery.mousewheel.js"></script>
  <script rel="script" type="text/javascript" src="public/js/jquery.imagemapster.min.js"></script>
  <script rel="script" type="text/javascript" src="public/js/perfect-scrollbar.jquery.min.js"></script>
  <script rel="script" type="text/javascript" src="public/js/jquery-ui.min.js"></script>
  <script rel="script" type="text/javascript" src="public/js/jquery.select-to-autocomplete.js"></script>

</head>
<body>
<div id="map">
  <div class="panzoom">
    <img id="mapImg" src="public/img/map.png" alt="Hanoi metro map" usemap="#metroMap">
    <map name="metroMap">
      <area href="#" data="station_170" shape="rect" coords="1057.31, 2945.32, 1102.81, 2977.82"/>
      <area href="#" data="station_152" shape="rect" coords="1673.7, 3662.74, 1719.2, 3695.24"/>
      <area href="#" data="station_129" shape="rect" coords="115.05, 1765.71, 160.55, 1798.21"/>
      <area href="#" data="station_122" shape="rect" coords="726.19, 2781.66, 771.69, 2814.16"/>
      <area href="#" data="station_7" shape="rect" coords="2571.29, 2507.24, 2616.79, 2539.74"/>
      <area href="#" data="station_37" shape="rect" coords="2270.54, 1905.27, 2316.04, 1937.77"/>
      <area href="#" data="station_159" shape="rect" coords="1361.08, 741.41, 1406.58, 773.91"/>
      <area href="#" data="station_94" shape="rect" coords="3327.98, 2658.37, 3373.48, 2690.87"/>
      <area href="#" data="station_117" shape="rect" coords="1906, 2664.86, 2002.29, 2697.37"/>
      <area href="#" data="station_35" shape="rect" coords="1960.66, 1905.27, 2006.16, 1937.77"/>
      <area href="#" data="station_52" shape="rect" coords="1878.79, 3210.98, 1924.29, 3243.48"/>
      <area href="#" data="station_55" shape="rect" coords="1565.79, 3536.73, 1611.29, 3569.23"/>
      <area href="#" data="station_180" shape="rect" coords="884.7, 1912.03, 930.2, 1944.53"/>
      <area href="#" data="station_45" shape="rect" coords="2244.37, 2204.73, 2341.79, 2237.24"/>
      <area href="#" data="station_179" shape="rect" coords="884.7, 2048.71, 930.2, 2081.21"/>
      <area href="#" data="station_64" shape="rect" coords="1455.67, 2000.04, 1501.17, 2032.54"/>
      <area href="#" data="station_68" shape="rect" coords="1965.08, 2210.02, 2010.58, 2242.52"/>
      <area href="#" data="station_156" shape="rect" coords="2240.15, 3662.74, 2285.65, 3695.24"/>
      <area href="#" data="station_67" shape="rect" coords="1815.05, 2187.6, 1860.55, 2258.77"/>
      <area href="#" data="station_147" shape="rect" coords="1362.87, 3019.86, 1408.14, 3052.68"/>
      <area href="#" data="station_107" shape="rect" coords="1815.89, 1647.02, 1861.39, 1679.52"/>
      <area href="#" data="station_104" shape="rect" coords="1815.05, 2356.3, 1860.55, 2388.8"/>
      <area href="#" data="station_141" shape="rect" coords="1576.56, 1680.25, 1622.06, 1712.75"/>
      <area href="#" data="station_8" shape="rect" coords="2546.29, 2362.24, 2642.68, 2394.74"/>
      <area href="#" data="station_182" shape="rect" coords="1511.06, 1907.69, 1556.56, 1940.19"/>
      <area href="#" data="station_148" shape="rect" coords="1364.17, 3231.59, 1409.67, 3264.09"/>
      <area href="#" data="station_20" shape="rect" coords="3483.67, 2817.37, 3529.17, 2886.11"/>
      <area href="#" data="station_185" shape="rect" coords="1765.05, 2553.27, 1860.55, 2585.77"/>
      <area href="#" data="station_9" shape="rect" coords="2546.06, 2204.73, 2641.54, 2237.24"/>
      <area href="#" data="station_153" shape="rect" coords="1829.57, 3626.49, 1875.07, 3695.24"/>
      <area href="#" data="station_13" shape="rect" coords="3156.55, 1899.99, 3202.05, 1932.49"/>
      <area href="#" data="station_14" shape="rect" coords="3317.89, 2060.5, 3414.17, 2093"/>
      <area href="#" data="station_60" shape="rect" coords="1059.31, 1740.43, 1105.02, 1809.17"/>
      <area href="#" data="station_5" shape="rect" coords="2571.29, 2896.24, 2616.79, 2928.74"/>
      <area href="#" data="station_97" shape="rect" coords="2723.13, 2814.37, 2768.63, 2846.87"/>
      <area href="#" data="station_78" shape="rect" coords="1513.75, 1229.04, 1559.25, 1261.54"/>
      <area href="#" data="station_112" shape="rect" coords="1034.56, 1533.69, 1132.25, 1566.19"/>
      <area href="#" data="station_51" shape="rect" coords="1975.05, 3117.2, 2020.55, 3149.7"/>
      <area href="#" data="station_137" shape="rect" coords="1814.16, 1316.32, 1858.34, 1345.42"/>
      <area href="#" data="station_11" shape="rect" coords="2604.18, 1964.23, 2702.04, 1996.73"/>
      <area href="#" data="station_39" shape="rect" coords="2720.5, 2060.5, 2766, 2093"/>
      <area href="#" data="station_116" shape="rect" coords="2040.93, 2356.3, 2086.43, 2388.8"/>
      <area href="#" data="station_38" shape="rect" coords="2416.04, 1905.27, 2461.54, 1937.77"/>
      <area href="#" data="station_134" shape="rect" coords="1809.84, 781.47, 1855.34, 813.97"/>
      <area href="#" data="station_126" shape="rect" coords="115.05, 2331.29, 160.55, 2363.79"/>
      <area href="#" data="station_4" shape="rect" coords="2575.42, 3195.74, 2620.92, 3228.24"/>
      <area href="#" data="station_89" shape="rect" coords="3155.67, 1701.5, 3201.17, 1734"/>
      <area href="#" data="station_194" shape="rect" coords="3474.44, 2966.44, 3519.94, 2998.94"/>
      <area href="#" data="station_131" shape="rect" coords="1809.84, 287.93, 1855.34, 320.43"/>
      <area href="#" data="station_93" shape="rect" coords="3327.98, 2517.8, 3373.48, 2550.3"/>
      <area href="#" data="station_80" shape="rect" coords="1818.98, 1192.8, 1864.51, 1261.17"/>
      <area href="#" data="station_155" shape="rect" coords="2113.06, 3662.74, 2158.56, 3695.24"/>
      <area href="#" data="station_136" shape="rect" coords="1809.84, 1052.92, 1855.34, 1085.42"/>
      <area href="#" data="station_187" shape="rect" coords="2289.87, 3030.98, 2335.37, 3063.48"/>
      <area href="#" data="station_42" shape="rect" coords="2416.04, 2435.62, 2461.54, 2468.12"/>
      <area href="#" data="station_69" shape="rect" coords="2120.32, 2208, 2165.82, 2240.5"/>
      <area href="#" data="station_82" shape="rect" coords="2106.13, 1229.04, 2151.63, 1261.54"/>
      <area href="#" data="station_83" shape="rect" coords="2344.38, 1229.04, 2389.88, 1261.54"/>
      <area href="#" data="station_158" shape="rect" coords="1361.89, 602.65, 1407.39, 635.15"/>
      <area href="#" data="station_92" shape="rect" coords="3327.98, 2365.37, 3373.48, 2397.87"/>
      <area href="#" data="station_105" shape="rect" coords="1764.66, 1907.69, 1861.39, 1939.25"/>
      <area href="#" data="station_175" shape="rect" coords="1527.04, 3353, 1572.54, 3385.5"/>
      <area href="#" data="station_193" shape="rect" coords="3474.44, 3117.21, 3519.71, 3149.71"/>
      <area href="#" data="station_190" shape="rect" coords="2672.39, 3117.21, 2717.89, 3149.71"/>
      <area href="#" data="station_77" shape="rect" coords="1342.68, 1229.04, 1438.45, 1261.54"/>
      <area href="#" data="station_121" shape="rect" coords="940.03, 2781.66, 985.53, 2814.16"/>
      <area href="#" data="station_176" shape="rect" coords="1716.85, 3536.73, 1762.35, 3569.23"/>
      <area href="#" data="station_191" shape="rect" coords="3125.46, 3117.21, 3170.96, 3149.71"/>
      <area href="#" data="station_173" shape="rect" coords="1527.04, 3068.65, 1572.54, 3101.15"/>
      <area href="#" data="station_53" shape="rect" coords="1773.89, 3310.73, 1819.39, 3343.23"/>
      <area href="#" data="station_174" shape="rect" coords="1527.04, 3208.15, 1572.54, 3240.65"/>
      <area href="#" data="station_149" shape="rect" coords="1364.84, 3448.52, 1410.34, 3481.02"/>
      <area href="#" data="station_46" shape="rect" coords="2268.75, 2326, 2314.25, 2358.5"/>
      <area href="#" data="station_150" shape="rect" coords="1362.81, 3662.74, 1408.31, 3695.24"/>
      <area href="#" data="station_168" shape="rect" coords="1057.31, 2592.65, 1102.81, 2625.15"/>
      <area href="#" data="station_48" shape="rect" coords="2268.75, 2600.87, 2314.25, 2633.37"/>
      <area href="#" data="station_101" shape="rect" coords="2143.07, 2700.77, 2188.57, 2733.27"/>
      <area href="#" data="station_28" shape="rect" coords="2267.56, 1149.88, 2313.06, 1182.38"/>
      <area href="#" data="station_186" shape="rect" coords="2040.93, 2783.19, 2086.43, 2815.69"/>
      <area href="#" data="station_65" shape="rect" coords="1564.26, 2099.45, 1609.76, 2131.95"/>
      <area href="#" data="station_114" shape="rect" coords="774.22, 1458.7, 819.72, 1491.2"/>
      <area href="#" data="station_109" shape="rect" coords="1576.56, 1601.69, 1622.06, 1634.19"/>
      <area href="#" data="station_115" shape="rect" coords="2041.56, 2124.73, 2087.06, 2157.23"/>
      <area href="#" data="station_71" shape="rect" coords="2873.27, 2363.01, 2918.77, 2395.51"/>
      <area href="#" data="station_12" shape="rect" coords="2962.04, 1899.99, 3007.54, 1932.49"/>
      <area href="#" data="station_166" shape="rect" coords="1057.31, 2140.81, 1102.81, 2173.16"/>
      <area href="#" data="station_165" shape="rect" coords="1057.81, 1912.03, 1102.81, 1981.05"/>
      <area href="#" data="station_143" shape="rect" coords="1357.51, 2142.92, 1403.01, 2175.42"/>
      <area href="#" data="station_118" shape="rect" coords="1759.07, 2777.91, 1804.57, 2810.41"/>
      <area href="#" data="station_62" shape="rect" coords="1261.76, 1805.7, 1309.26, 1840.2"/>
      <area href="#" data="station_145" shape="rect" coords="1358.09, 2592.25, 1403.64, 2624.75"/>
      <area href="#" data="station_171" shape="rect" coords="1239.87, 2945.19, 1289.87, 2977.69"/>
      <area href="#" data="station_133" shape="rect" coords="1809.84, 613.41, 1855.34, 645.91"/>
      <area href="#" data="station_32" shape="rect" coords="1960.66, 1560.59, 2006.16, 1593.09"/>
      <area href="#" data="station_125" shape="rect" coords="267.06, 2492.04, 312.56, 2524.54"/>
      <area href="#" data="station_33" shape="rect" coords="1960.66, 1688.01, 2006.16, 1720.51"/>
      <area href="#" data="station_30" shape="rect" coords="2068.92, 1359.87, 2114.42, 1392.37"/>
      <area href="#" data="station_1" shape="rect" coords="2569.04, 3812.74, 2614.54, 3845.24"/>
      <area href="#" data="station_96" shape="rect" coords="3125.46, 2812.57, 3170.96, 2845.07"/>
      <area href="#" data="station_31" shape="rect" coords="1960.66, 1447.03, 2006.16, 1479.53"/>
      <area href="#" data="station_138" shape="rect" coords="1812.84, 1401.26, 1858.34, 1433.76"/>
      <area href="#" data="station_61" shape="rect" coords="1191.09, 1760.42, 1236.59, 1792.92"/>
      <area href="#" data="station_21" shape="rect" coords="3632.17, 2817.37, 3677.67, 2849.87"/>
      <area href="#" data="station_22" shape="rect" coords="2016.88, 123.92, 2114.43, 156.42"/>
      <area href="#" data="station_130" shape="rect" coords="1809.84, 123.92, 1855.34, 156.42"/>
      <area href="#" data="station_63" shape="poly" coords="1334.76, 1887.02, 1380.26, 1887.02, 1393.42, 1906.75, 1432, 1907.69, 1432, 1940.19, 1386.5, 1940.19, 1380.26, 1955.77, 1334.76, 1955.77"/>
      <area href="#" data="station_154" shape="rect" coords="1973.02, 3662.74, 2018.52, 3695.24"/>
      <area href="#" data="station_160" shape="rect" coords="1361.08, 865.65, 1406.58, 898.15"/>
      <area href="#" data="station_119" shape="rect" coords="1504.52, 2781.66, 1550.02, 2814.16"/>
      <area href="#" data="station_15" shape="rect" coords="3314.46, 2210.02, 3410.04, 2242.52"/>
      <area href="#" data="station_57" shape="rect" coords="534.27, 1760.42, 579.77, 1792.92"/>
      <area href="#" data="station_10" shape="rect" coords="2574.04, 2060.5, 2619.54, 2093"/>
      <area href="#" data="station_181" shape="rect" coords="1213.45, 1910.55, 1258.95, 1943.05"/>
      <area href="#" data="station_6" shape="rect" coords="2571.29, 2695.24, 2616.79, 2727.99"/>
      <area href="#" data="station_36" shape="rect" coords="2078.81, 1905.27, 2175.05, 1937.77"/>
      <area href="#" data="station_124" shape="rect" coords="397.8, 2626.15, 443.3, 2658.65"/>
      <area href="#" data="station_16" shape="rect" coords="3483.67, 2210.02, 3529.17, 2242.52"/>
      <area href="#" data="station_26" shape="rect" coords="2267.56, 741.91, 2313.06, 774.41"/>
      <area href="#" data="station_177" shape="rect" coords="884.7, 2336.57, 930.2, 2369.07"/>
      <area href="#" data="station_123" shape="rect" coords="540.31, 2781.66, 585.81, 2814.16"/>
      <area href="#" data="station_157" shape="rect" coords="2376.78, 3662.74, 2422.28, 3695.24"/>
      <area href="#" data="station_75" shape="rect" coords="2873.27, 2965.42, 2918.77, 2997.92"/>
      <area href="#" data="station_59" shape="rect" coords="878.28, 1760.42, 923.78, 1792.92"/>
      <area href="#" data="station_139" shape="rect" coords="1777.82, 1485.62, 1823.32, 1518.12"/>
      <area href="#" data="station_34" shape="rect" coords="1960.66, 1802.42, 2006.16, 1834.92"/>
      <area href="#" data="station_146" shape="rect" coords="1363.33, 2801.64, 1408.83, 2834.14"/>
      <area href="#" data="station_164" shape="rect" coords="1057.31, 1639.57, 1102.81, 1672.07"/>
      <area href="#" data="station_17" shape="rect" coords="3483.67, 2361.74, 3529.17, 2394.24"/>
      <area href="#" data="station_18" shape="rect" coords="3483.67, 2512.52, 3529.17, 2545.02"/>
      <area href="#" data="station_47" shape="rect" coords="2268.75, 2463.74, 2314.25, 2496.24"/>
      <area href="#" data="station_23" shape="rect" coords="2267.56, 123.92, 2313.06, 156.42"/>
      <area href="#" data="station_73" shape="rect" coords="2874.77, 2666.05, 2920.27, 2698.55"/>
      <area href="#" data="station_50" shape="rect" coords="2074.79, 3014.73, 2120.29, 3047.23"/>
      <area href="#" data="station_135" shape="rect" coords="1809.84, 917.93, 1855.34, 950.43"/>
      <area href="#" data="station_142" shape="rect" coords="1476.13, 1791.45, 1521.63, 1823.95"/>
      <area href="#" data="station_113" shape="rect" coords="921.27, 1458.7, 966.77, 1491.2"/>
      <area href="#" data="station_132" shape="rect" coords="1809.84, 451.91, 1855.34, 484.41"/>
      <area href="#" data="station_24" shape="rect" coords="2267.56, 349.5, 2313.06, 382"/>
      <area href="#" data="station_95" shape="rect" coords="3327.98, 2812.57, 3373.48, 2845.07"/>
      <area href="#" data="station_111" shape="rect" coords="1209.85, 1603.32, 1255.35, 1635.82"/>
      <area href="#" data="station_163" shape="rect" coords="1200.62, 1393.2, 1246.12, 1425.7"/>
      <area href="#" data="station_91" shape="rect" coords="3323.14, 1881.74, 3368.64, 1914.24"/>
      <area href="#" data="station_44" shape="rect" coords="2268.75, 2727.99, 2365.31, 2760.49"/>
      <area href="#" data="station_192" shape="rect" coords="3327.98, 3117.21, 3373.48, 3149.71"/>
      <area href="#" data="station_79" shape="rect" coords="1666.49, 1229.04, 1711.99, 1261.54"/>
      <area href="#" data="station_74" shape="rect" coords="2847.77, 2815.92, 2946.96, 2848.42"/>
      <area href="#" data="station_184" shape="rect" coords="1664.76, 2403.85, 1710.26, 2436.35"/>
      <area href="#" data="station_99" shape="rect" coords="2412.36, 2814.37, 2457.86, 2846.87"/>
      <area href="#" data="station_86" shape="rect" coords="2847.09, 1395.98, 2892.59, 1428.48"/>
      <area href="#" data="station_178" shape="rect" coords="884.7, 2204.57, 930.2, 2237.07"/>
      <area href="#" data="station_106" shape="rect" coords="1815.89, 1773.63, 1861.39, 1806.13"/>
      <area href="#" data="station_40" shape="rect" coords="2696.32, 2204.73, 2791.3, 2237.24"/>
      <area href="#" data="station_19" shape="rect" coords="3483.67, 2662.47, 3529.17, 2694.97"/>
      <area href="#" data="station_56" shape="rect" coords="366.47, 1760.42, 411.97, 1792.92"/>
      <area href="#" data="station_102" shape="rect" coords="2040.93, 2553.43, 2086.43, 2622.01"/>
      <area href="#" data="station_27" shape="rect" coords="2267.56, 971.29, 2313.06, 1003.79"/>
      <area href="#" data="station_172" shape="rect" coords="1425.87, 2945.19, 1471.37, 2977.69"/>
      <area href="#" data="station_54" shape="rect" coords="1698.48, 3391.53, 1743.98, 3424.03"/>
      <area href="#" data="station_70" shape="rect" coords="2420.59, 2204.73, 2466.09, 2237.23"/>
      <area href="#" data="station_87" shape="rect" coords="2937.97, 1495.98, 2983.47, 1528.47"/>
      <area href="#" data="station_84" shape="rect" coords="2530.81, 1229.04, 2576.31, 1261.54"/>
      <area href="#" data="station_3" shape="rect" coords="2569.04, 3423.24, 2616.79, 3455.74"/>
      <area href="#" data="station_49" shape="rect" coords="2155.29, 2917.77, 2251.53, 2950.27"/>
      <area href="#" data="station_29" shape="rect" coords="2168.55, 1257.49, 2214.05, 1289.99"/>
      <area href="#" data="station_2" shape="rect" coords="2516.27, 3662.74, 2614.54, 3695.24"/>
      <area href="#" data="station_85" shape="rect" coords="2747.76, 1294.31, 2793.26, 1326.81"/>
      <area href="#" data="station_81" shape="rect" coords="1965.82, 1229.04, 2011.32, 1261.54"/>
      <area href="#" data="station_98" shape="rect" coords="2594.04, 2814.37, 2639.54, 2846.87"/>
      <area href="#" data="station_144" shape="rect" coords="1358.09, 2364.25, 1403.64, 2396.75"/>
      <area href="#" data="station_140" shape="rect" coords="1703.66, 1561.7, 1749.16, 1594.2"/>
      <area href="#" data="station_128" shape="rect" coords="115.05, 1980.71, 160.55, 2013.21"/>
      <area href="#" data="station_167" shape="rect" coords="1057.31, 2364.91, 1102.81, 2397.41"/>
      <area href="#" data="station_103" shape="rect" coords="1917.56, 2469.02, 1963.06, 2501.52"/>
      <area href="#" data="station_151" shape="rect" coords="1526.69, 3662.74, 1572.04, 3695.24"/>
      <area href="#" data="station_169" shape="rect" coords="1057.31, 2806.65, 1102.81, 2839.15"/>
      <area href="#" data="station_76" shape="rect" coords="2846.77, 3117.21, 2943.02, 3149.71"/>
      <area href="#" data="station_161" shape="rect" coords="1361.08, 976.58, 1406.58, 1009.08"/>
      <area href="#" data="station_25" shape="rect" coords="2267.56, 550.62, 2313.06, 583.12"/>
      <area href="#" data="station_110" shape="rect" coords="1361.89, 1603.32, 1407.39, 1635.82"/>
      <area href="#" data="station_41" shape="rect" coords="2720.5, 2361.5, 2766, 2394"/>
      <area href="#" data="station_189" shape="rect" coords="2513.03, 3117.21, 2558.53, 3149.71"/>
      <area href="#" data="station_120" shape="rect" coords="1229.82, 2781.66, 1275.32, 2814.16"/>
      <area href="#" data="station_162" shape="rect" coords="1361.08, 1105.65, 1406.58, 1138.15"/>
      <area href="#" data="station_108" shape="rect" coords="1740.89, 1603.32, 1786.39, 1635.82"/>
      <area href="#" data="station_188" shape="rect" coords="2385.5, 3117.21, 2431, 3149.71"/>
      <area href="#" data="station_183" shape="rect" coords="1664.76, 1907.69, 1710.26, 1940.19"/>
      <area href="#" data="station_100" shape="rect" coords="2267.12, 2814.37, 2312.62, 2846.87"/>
      <area href="#" data="station_66" shape="rect" coords="1664.76, 2188.92, 1710.26, 2258.77"/>
      <area href="#" data="station_43" shape="rect" coords="2416.04, 2600.87, 2461.54, 2633.37"/>
      <area href="#" data="station_88" shape="rect" coords="3049.3, 1597.31, 3094.8, 1629.81"/>
      <area href="#" data="station_72" shape="rect" coords="2873.27, 2507.24, 2918.77, 2539.74"/>
      <area href="#" data="station_127" shape="rect" coords="115.05, 2153.71, 160.55, 2186.21"/>
      <area href="#" data="station_90" shape="rect" coords="3240.67, 1799.41, 3286.17, 1831.41"/>
      <area href="#" data="station_58" shape="rect" coords="707.44, 1760.42, 752.94, 1792.92"/>


      <area href="#" data="line_1" shape="circle" coords="2587.85, 3918.17, 42"/>
      <area href="#" data="line_1" shape="circle" coords="3654.29, 2753.73, 42"/>
      <area href="#" data="line_2" shape="circle" coords="2103.22, 70.7, 42"/>
      <area href="#" data="line_2" shape="circle" coords="2503.53, 2727.99, 42"/>
      <area href="#" data="line_3" shape="circle" coords="2293.29, 2102.5, 42"/>
      <area href="#" data="line_3" shape="circle" coords="1515.29, 3439.49, 42"/>
      <area href="#" data="line_4" shape="circle" coords="293.64, 1776.67, 42"/>
      <area href="#" data="line_4" shape="circle" coords="2893.27, 3202.67, 42"/>
      <area href="#" data="line_5" shape="circle" coords="1248.16, 1241.99, 42"/>
      <area href="#" data="line_5" shape="circle" coords="702.8, 1477.4, 42"/>
      <area href="#" data="line_6" shape="circle" coords="132.67, 1624.85, 42"/>
      <area href="#" data="line_6" shape="circle" coords="2165.82, 1985.77, 42"/>
      <area href="#" data="line_7" shape="circle" coords="2012.94, 70.7, 42"/>
      <area href="#" data="line_7" shape="circle" coords="2667.48, 3679.83, 42"/>
      <area href="#" data="line_8" shape="circle" coords="1392.95, 473.91, 42"/>
      <area href="#" data="line_8" shape="circle" coords="1852.32, 3761.24, 42"/>
      <area href="#" data="line_9" shape="circle" coords="901.03, 2427.78, 42"/>
      <area href="#" data="line_9" shape="circle" coords="3580.67, 2886.11, 42"/>
    </map>
  </div>
  <div class="mapButtons">
    <div>
      <button class="zoom-in">+</button>
    </div>
    <div class="rangeSlide"><input type="range" class="zoom-range"></div>
    <div>
      <button class="zoom-out">-</button>
    </div>
  </div>
</div>

<!-- panzoom script -->
<script>
  (function () {
    var $section = $('#map');
    var $panzoom = $section.find('.panzoom').panzoom({
        $zoomIn: $section.find(".zoom-in"),
        $zoomOut: $section.find(".zoom-out"),
        $zoomRange: $section.find(".zoom-range"),
        //$reset: $section.find(".reset"),
        //contain: 'invert',
        minScale: 0.3,
        maxScale: 1.5
      }
    ).panzoom('zoom');
    $panzoom.parent().on('mousewheel.focal', function (e) {
      e.preventDefault();
      var delta = e.delta || e.originalEvent.wheelDelta;
      var zoomOut = delta ? delta < 0 : e.originalEvent.deltaY > 0;
      $panzoom.panzoom('zoom', zoomOut, {
        animate: false,
        focal: e
      });
    });
    $panzoom.panzoom("zoom", 1);
    $panzoom.panzoom("pan", -1500, -1700);
  })();
  //////////////////////////
  var $section = $('#map');
  $panzoom = $section.find('.panzoom');
  function pan() {
    $panzoom.panzoom("pan", 100, -100, {relative: true});
  }
  function resetPan() {
    $panzoom.panzoom("zoom", 1, {animate: true});
    $panzoom.panzoom("pan", -1500, -1700);
  }
  function zoom() {
    $panzoom.panzoom("zoom", 3, {animate: true});
  }
</script>

<!-- image mapster -->
<script>
  $(document).on({
    ajaxStart: function() {
      $("#infoSection").html("");
      $('#loading').show();
    },
    ajaxStop: function() { $('#loading').hide() ; }
  });
  // image mapster
  $('#mapImg').mapster({
    // render option
    fill: false,
    stroke: true,
    strokeWidth: 2,
    hightlight: true,
    render_highlight: {
      strokeColor: '00ff00'
    },
    render_select: {
      strokeColor: 'ff0000'
    },
    showToolTip: true,
    // click option
    mapKey: 'data',
    onClick: function getInfo(e) {
      var key = e.key;
      $(".sideBar").css("height", "100vh");
      if (key.search("station") === 0) {
        var stationId = key.substr(8);
        $.get("stations/" + stationId + "/arrivaltimeinfo" , function (data) {
         $("#infoSection").html(data);
         });
        $.ajax({
          url: "stations/" + stationId + "/name",
          global: false,
          success: function (data) {
            $("#searchForm :input").val(data);
          }
        });
      }
      else if (key.search("line") === 0) {
        var lineId = key.substr(5);
        $.get("lines/" + lineId , function (data) {
          $("#infoSection").html(data);
        });
        $.ajax({
          url: "lines/" + lineId + "/codename",
          global: false,
          success: function (data) {
            $("#searchForm :input").val(data);
          }
        });
      }
    }
  });

</script>
<div class="sideBar">
  <div class="searchBox">
    <form id="searchForm" onsubmit="return false">
      <div class="input-groupx">
        <script>
          (function($){
            $(function(){
              $('#selectSearch').selectToAutocomplete();
            });
          })(jQuery);
        </script>
        <select id="selectSearch" class="form-control" placeholder="Type station or line">
          <option value=""></option>

          <option value="station_170" data-alternative-spellings="An Tho AT">An Thọ</option>
          <option value="station_152" data-alternative-spellings="Ba La BL">Ba La</option>
          <option value="station_129" data-alternative-spellings="Ba vi Bv">Ba vì</option>
          <option value="station_122" data-alternative-spellings="Bac An Khanh BAK">Bắc An Khánh</option>
          <option value="station_7" data-alternative-spellings="Bach Mai BM">Bạch Mai</option>
          <option value="station_37" data-alternative-spellings="Bach Thao BT">Bách Thảo</option>
          <option value="station_159" data-alternative-spellings="Bao Thap BT">Bảo Tháp</option>
          <option value="station_94" data-alternative-spellings="Bat Khoi BK">Bát Khối</option>
          <option value="station_117" data-alternative-spellings="BigC Thang Long BTL">BigC Thăng Long</option>
          <option value="station_35" data-alternative-spellings="Buoi B">Bưởi</option>
          <option value="station_52" data-alternative-spellings="BX Ha Dong BXHD">BX Hà Đông</option>
          <option value="station_55" data-alternative-spellings="BX Ha Dong moi BXHDm">BX Hà Đông mới</option>
          <option value="station_180" data-alternative-spellings="Cao Xa Thuong CXT">Cao Xá Thượng</option>
          <option value="station_45" data-alternative-spellings="Cat Linh CL">Cát Linh</option>
          <option value="station_179" data-alternative-spellings="Cat Que CQ">Cát Quế</option>
          <option value="station_64" data-alternative-spellings="Cau Dien CD">Cầu Diễn</option>
          <option value="station_68" data-alternative-spellings="Cau Giay CG">Cầu Giấy</option>
          <option value="station_156" data-alternative-spellings="Cau Sat CS">Cầu Sắt</option>
          <option value="station_67" data-alternative-spellings="Chua Ha CH">Chùa Hà</option>
          <option value="station_147" data-alternative-spellings="Chua Van CV">Chùa Văn</option>
          <option value="station_107" data-alternative-spellings="Co Nhue CN">Cổ Nhuế</option>
          <option value="station_104" data-alternative-spellings="Cv Cau Giay CCG">Cv Cầu Giấy</option>
          <option value="station_141" data-alternative-spellings="Cv Hoa Binh CHB">Cv Hòa Bình</option>
          <option value="station_8" data-alternative-spellings="Cv THong Nhat CTN">Cv THống Nhất</option>
          <option value="station_182" data-alternative-spellings="Doan Ke Thien DKT">Doãn Kế Thiện</option>
          <option value="station_148" data-alternative-spellings="Duong Noi DN">Dương Nội</option>
          <option value="station_20" data-alternative-spellings="Duong Xa DX">Dương Xá</option>
          <option value="station_185" data-alternative-spellings="Duong Dinh Nghe DDN">Dương Đình Nghệ</option>
          <option value="station_9" data-alternative-spellings="Ga Ha Noi GHN">Ga Hà Nội</option>
          <option value="station_153" data-alternative-spellings="Ga Ha Dong GHD">Ga Hà Đông</option>
          <option value="station_13" data-alternative-spellings="Gia Lam GL">Gia Lâm</option>
          <option value="station_14" data-alternative-spellings="Gia Thuy GT">Gia Thụy</option>
          <option value="station_60" data-alternative-spellings="Giang Xa GX">Giang Xá</option>
          <option value="station_5" data-alternative-spellings="Giap Bat GB">Giáp Bát</option>
          <option value="station_97" data-alternative-spellings="Goc De GD">Gốc Đề</option>
          <option value="station_78" data-alternative-spellings="Ha Loi HL">Hạ Lôi</option>
          <option value="station_112" data-alternative-spellings="Ha Tri HT">Hạ Trì</option>
          <option value="station_51" data-alternative-spellings="Ha Dong HD">Hà Đông</option>
          <option value="station_137" data-alternative-spellings="Hai Boi HB">Hải Bối</option>
          <option value="station_11" data-alternative-spellings="Hang Dau HD">Hàng Đậu</option>
          <option value="station_39" data-alternative-spellings="Ho Hoan Kiem HHK">Hồ Hoàn Kiếm</option>
          <option value="station_116" data-alternative-spellings="Ho Ngoc Khanh HNK">Hồ Ngọc Khánh</option>
          <option value="station_38" data-alternative-spellings="Ho Tay HT">Hồ Tây</option>
          <option value="station_134" data-alternative-spellings="Ho Van Tri HVT">Hồ Vân Trì</option>
          <option value="station_126" data-alternative-spellings="Hoa Lac HL">Hòa Lạc</option>
          <option value="station_4" data-alternative-spellings="Hoang Liet HL">Hoàng Liệt</option>
          <option value="station_89" data-alternative-spellings="Hoi Phu HP">Hội Phụ</option>
          <option value="station_194" data-alternative-spellings="HV Nong Nghiep HVNN">HV Nông Nghiệp</option>
          <option value="station_131" data-alternative-spellings="KCN Quang Minh KCNQM">KCN Quang Minh</option>
          <option value="station_93" data-alternative-spellings="KCN Sai Dong B KCNSDB">KCN Sài Đồng B</option>
          <option value="station_80" data-alternative-spellings="KCN Thang Long KCNTL">KCN Thăng Long</option>
          <option value="station_155" data-alternative-spellings="Kien Hung KH">Kiến Hưng</option>
          <option value="station_136" data-alternative-spellings="Kim Chung KC">Kim Chung</option>
          <option value="station_187" data-alternative-spellings="Kim Giang KG">Kim Giang</option>
          <option value="station_42" data-alternative-spellings="Kim Lien KL">Kim Liên</option>
          <option value="station_69" data-alternative-spellings="Kim Ma KM">Kim Mã</option>
          <option value="station_82" data-alternative-spellings="Kim No KN">Kim Nô</option>
          <option value="station_83" data-alternative-spellings="Kim No 2 KN2">Kim Nô 2</option>
          <option value="station_158" data-alternative-spellings="Kim Tien KT">Kim Tiến</option>
          <option value="station_92" data-alternative-spellings="KTT  981 KTT981">KTT  981</option>
          <option value="station_105" data-alternative-spellings="KTT Nghia Tan KTTNT">KTT Nghĩa Tân</option>
          <option value="station_175" data-alternative-spellings="KDT An Hung KDTAH">KĐT An Hưng</option>
          <option value="station_193" data-alternative-spellings="KDT Ecopark KDTE">KĐT Ecopark</option>
          <option value="station_190" data-alternative-spellings="KDT Linh Dam KDTLD">KĐT Linh Đàm</option>
          <option value="station_77" data-alternative-spellings="KDT Me Linh KDTML">KĐT Mê Linh</option>
          <option value="station_121" data-alternative-spellings="KDT Splendora KDTS">KĐT Splendora</option>
          <option value="station_176" data-alternative-spellings="KDT Van La KDTVL">KĐT Văn La</option>
          <option value="station_191" data-alternative-spellings="KDT Yen Duyen KDTYD">KĐT Yên Duyên</option>
          <option value="station_173" data-alternative-spellings="La Duong LD">La Dương</option>
          <option value="station_53" data-alternative-spellings="La Khe LK">La Khê</option>
          <option value="station_174" data-alternative-spellings="La Noi LN">La Nội</option>
          <option value="station_149" data-alternative-spellings="La Phu LP">La Phù</option>
          <option value="station_46" data-alternative-spellings="La Thanh LT">La Thành</option>
          <option value="station_150" data-alternative-spellings="La Tinh LT">La Tinh</option>
          <option value="station_168" data-alternative-spellings="Lai Yen LY">Lại Yên</option>
          <option value="station_48" data-alternative-spellings="Lang L">Láng</option>
          <option value="station_101" data-alternative-spellings="Lang Ha LH">Láng Hạ</option>
          <option value="station_28" data-alternative-spellings="Le Phap LP">Lê Pháp</option>
          <option value="station_186" data-alternative-spellings="Le Van Luong LVL">Lê Văn Lương</option>
          <option value="station_65" data-alternative-spellings="Le Duc Tho LDT">Lê Đức Thọ</option>
          <option value="station_114" data-alternative-spellings="Lien Ha LH">Liên Hà</option>
          <option value="station_109" data-alternative-spellings="Lien Mac LM">Liên Mạc</option>
          <option value="station_115" data-alternative-spellings="Lieu Giai LG">Liễu Giai</option>
          <option value="station_71" data-alternative-spellings="Lo Duc LD">Lò Đúc</option>
          <option value="station_12" data-alternative-spellings="Long Bien Nam LBN">Long Biên Nam</option>
          <option value="station_166" data-alternative-spellings="Lung Kenh LK">Lũng Kênh</option>
          <option value="station_165" data-alternative-spellings="Luu Xa LX">Lưu Xá</option>
          <option value="station_143" data-alternative-spellings="Mai Dich MD">Mai Dịch</option>
          <option value="station_118" data-alternative-spellings="Me Tri MT">Mễ Trì</option>
          <option value="station_62" data-alternative-spellings="Minh Khai MK">Minh Khai</option>
          <option value="station_145" data-alternative-spellings="My Dinh MD">Mỹ Đình</option>
          <option value="station_171" data-alternative-spellings="Nam An Khanh NAK">Nam An Khánh</option>
          <option value="station_133" data-alternative-spellings="Nam Hong NH">Nam Hồng</option>
          <option value="station_32" data-alternative-spellings="Nam Thang Long NTL">Nam Thăng Long</option>
          <option value="station_125" data-alternative-spellings="Ngo Sai NS">Ngô Sài</option>
          <option value="station_33" data-alternative-spellings="Ngoai Giao Doan NGD">Ngoại Giao Đoàn</option>
          <option value="station_30" data-alternative-spellings="Ngoc Giang NG">Ngọc Giang</option>
          <option value="station_1" data-alternative-spellings="Ngoc Hoi NH">Ngọc Hồi</option>
          <option value="station_96" data-alternative-spellings="Nguyen Khoai NK">Nguyễn Khoái</option>
          <option value="station_31" data-alternative-spellings="Nhat Tan NT">Nhật Tân</option>
          <option value="station_138" data-alternative-spellings="Nhat Tao NT">Nhật Tảo</option>
          <option value="station_61" data-alternative-spellings="Nhon N">Nhổn</option>
          <option value="station_21" data-alternative-spellings="Nhu Quynh NQ">Như Quỳnh</option>
          <option value="station_22" data-alternative-spellings="Noi Bai NB">Nội Bài</option>
          <option value="station_130" data-alternative-spellings="Phu Cuong PC">Phú Cường</option>
          <option value="station_63" data-alternative-spellings="Phu Dien PD">Phú Diễn</option>
          <option value="station_154" data-alternative-spellings="Phu Luong PL">Phú Lương</option>
          <option value="station_160" data-alternative-spellings="Phu Tri PT">Phú Trì</option>
          <option value="station_119" data-alternative-spellings="Phu Do PD">Phú Đô</option>
          <option value="station_15" data-alternative-spellings="Phuc Dong PD">Phúc Đồng</option>
          <option value="station_57" data-alternative-spellings="Phung P">Phùng</option>
          <option value="station_10" data-alternative-spellings="Phung Hung PH">Phùng Hưng</option>
          <option value="station_181" data-alternative-spellings="Phuong Canh PC">Phương Canh</option>
          <option value="station_6" data-alternative-spellings="Phuong Liet PL">Phương Liệt</option>
          <option value="station_36" data-alternative-spellings="Quan Ngua QN">Quần Ngựa</option>
          <option value="station_124" data-alternative-spellings="Sai Son SS">Sài Sơn</option>
          <option value="station_16" data-alternative-spellings="Sai Dong SD">Sài Đồng</option>
          <option value="station_26" data-alternative-spellings="Son Du SD">Sơn Du</option>
          <option value="station_177" data-alternative-spellings="Son Dong SD">Sơn Đồng</option>
          <option value="station_123" data-alternative-spellings="Song Phuong SP">Song Phương</option>
          <option value="station_157" data-alternative-spellings="Ta Thanh Oai TTO">Tả Thanh Oai</option>
          <option value="station_75" data-alternative-spellings="Tan Mai TM">Tân Mai</option>
          <option value="station_59" data-alternative-spellings="Tan Tay Do TTD">Tân Tây Đô</option>
          <option value="station_139" data-alternative-spellings="Tan Xuan TX">Tân Xuân</option>
          <option value="station_34" data-alternative-spellings="Tay Ho Tay THT">Tây Hồ Tây</option>
          <option value="station_146" data-alternative-spellings="Tay Mo TM">Tây Mỗ</option>
          <option value="station_164" data-alternative-spellings="Tay Tuu TT">Tây Tựu</option>
          <option value="station_17" data-alternative-spellings="Thach Ban TB">Thạch Bàn</option>
          <option value="station_18" data-alternative-spellings="Thach Cau TC">Thạch Cầu</option>
          <option value="station_47" data-alternative-spellings="Thai Ha TH">Thái Hà</option>
          <option value="station_23" data-alternative-spellings="Thai Phu TP">Thái Phù</option>
          <option value="station_73" data-alternative-spellings="Thanh Nhan TN">Thanh Nhàn</option>
          <option value="station_50" data-alternative-spellings="Thanh Xuan 3 TX3">Thanh Xuân 3</option>
          <option value="station_135" data-alternative-spellings="Thon Nhue TN">Thôn Nhuế</option>
          <option value="station_142" data-alternative-spellings="Thon Tru 2 TT2">Thôn Trù 2</option>
          <option value="station_113" data-alternative-spellings="Thon Trung TT">Thôn Trung</option>
          <option value="station_132" data-alternative-spellings="Thon Ve TV">Thôn Vệ</option>
          <option value="station_24" data-alternative-spellings="Thon Dong TD">Thôn Đông</option>
          <option value="station_95" data-alternative-spellings="Thong Nhat TN">Thống Nhất</option>
          <option value="station_111" data-alternative-spellings="Thuong Cat TC">Thượng Cát</option>
          <option value="station_163" data-alternative-spellings="Thuong Le TL">Thường Lệ</option>
          <option value="station_91" data-alternative-spellings="Thuong Thanh TT">Thượng Thanh</option>
          <option value="station_44" data-alternative-spellings="Thuong Dinh TD">Thượng Đình</option>
          <option value="station_192" data-alternative-spellings="Thuy Linh TL">Thúy Lĩnh</option>
          <option value="station_79" data-alternative-spellings="Tien Phong TP">Tiền Phong</option>
          <option value="station_74" data-alternative-spellings="Times City TC">Times City</option>
          <option value="station_184" data-alternative-spellings="Ton That Thuyet TTT">Tôn Thất Thuyết</option>
          <option value="station_99" data-alternative-spellings="Ton That Tung TTT">Tôn Thất Tùng</option>
          <option value="station_86" data-alternative-spellings="Trai Cam TC">Trại Cầm</option>
          <option value="station_178" data-alternative-spellings="Trai Gia TG">Trại Giá</option>
          <option value="station_106" data-alternative-spellings="Tran Cung TC">Trần Cung</option>
          <option value="station_40" data-alternative-spellings="Tran Hung Dao THD">Trần Hưng Đạo</option>
          <option value="station_19" data-alternative-spellings="Trau Quy TQ">Trâu Quỳ</option>
          <option value="station_56" data-alternative-spellings="Troi T">Trôi</option>
          <option value="station_102" data-alternative-spellings="Trung Hoa TH">Trung Hòa</option>
          <option value="station_27" data-alternative-spellings="Trung Oai TO">Trung Oai</option>
          <option value="station_172" data-alternative-spellings="TD Bao Son TDBS">TĐ Bảo Sơn</option>
          <option value="station_54" data-alternative-spellings="Van Khe VK">Văn Khê</option>
          <option value="station_70" data-alternative-spellings="Van Mieu VM">Văn Miếu</option>
          <option value="station_87" data-alternative-spellings="Van Thuong VT">Văn Thượng</option>
          <option value="station_84" data-alternative-spellings="Van Tri VT">Vân Trì</option>
          <option value="station_3" data-alternative-spellings="Van Dien VD">Văn Điển</option>
          <option value="station_49" data-alternative-spellings="Vanh dai 3 Vd3">Vành đai 3</option>
          <option value="station_29" data-alternative-spellings="VInh Ngoc VN">VĨnh Ngọc</option>
          <option value="station_2" data-alternative-spellings="Vinh Quynh VQ">Vĩnh Quỳnh</option>
          <option value="station_85" data-alternative-spellings="Vo Nguyen Giap VNG">Võ Nguyên Giáp</option>
          <option value="station_81" data-alternative-spellings="Vo Van Kiet VVK">Võ Văn Kiệt</option>
          <option value="station_98" data-alternative-spellings="Vong V">Vọng</option>
          <option value="station_144" data-alternative-spellings="Xuan Phuong XP">Xuân Phương</option>
          <option value="station_140" data-alternative-spellings="Xuan DInh XD">Xuân ĐỈnh</option>
          <option value="station_128" data-alternative-spellings="Yen Bai YB">Yên Bài</option>
          <option value="station_167" data-alternative-spellings="Yen Be YB">Yên Bệ</option>
          <option value="station_103" data-alternative-spellings="Yen Hoa YH">Yên Hòa</option>
          <option value="station_151" data-alternative-spellings="Yen Lo YL">Yên Lộ</option>
          <option value="station_169" data-alternative-spellings="Yen Lung YL">Yên Lũng</option>
          <option value="station_76" data-alternative-spellings="Yen So YS">Yên Sở</option>
          <option value="station_161" data-alternative-spellings="Yen Vinh YV">Yên Vinh</option>
          <option value="station_25" data-alternative-spellings="Dai Bang DB">Đại Bằng</option>
          <option value="station_110" data-alternative-spellings="Dai Cat DC">Đại Cát</option>
          <option value="station_41" data-alternative-spellings="Dai Co Viet DCV">Đại Cồ Việt</option>
          <option value="station_189" data-alternative-spellings="Dai Kim DK">Đại Kim</option>
          <option value="station_120" data-alternative-spellings="Dai Mo DM">Đại Mỗ</option>
          <option value="station_162" data-alternative-spellings="Dai Thinh DT">Đại Thịnh</option>
          <option value="station_108" data-alternative-spellings="DH Mo DHM">ĐH Mỏ</option>
          <option value="station_188" data-alternative-spellings="DH Thang Long DHTL">ĐH Thăng Long</option>
          <option value="station_183" data-alternative-spellings="DH Dien Luc DHDL">ĐH Điện Lực</option>
          <option value="station_100" data-alternative-spellings="DHQG 1 DHQG1">ĐHQG 1</option>
          <option value="station_66" data-alternative-spellings="DHQG 2 DHQG2">ĐHQG 2</option>Bách Thảo
          <option value="station_43" data-alternative-spellings="Dinh Cong DC">Định Công</option>
          <option value="station_88" data-alternative-spellings="Dong Hoi DH">Đông Hội</option>
          <option value="station_72" data-alternative-spellings="Dong Mac DM">Đông Mác</option>
          <option value="station_127" data-alternative-spellings="Dong Mo DM">Đồng Mô</option>
          <option value="station_90" data-alternative-spellings="Dong Tru DT">Đông Trù</option>
          <option value="station_58" data-alternative-spellings="Duc Thuong DT">Đức Thượng</option>


        </select>
        <!--<span class="input-group-btn">
        <button class="btn btn-secondary" type="button"><i class="fa fa-compass"></i></button>
      </span>-->
        <script>
          $("#selectSearch").on('change', function() {
            $(".sideBar").css("height", "100vh");
            var searchStr = $('#selectSearch').val();
            if (searchStr.search("station") === 0) {
              var stationId = searchStr.substr(8);
              $.get("stations/" + stationId + "/arrivaltimeinfo", function (data) {
                $("#infoSection").html(data);
              });
            }
          });
        </script>
      </div>
    </form>
  </div>
  <div id="loading" style="display: none;">
    <img  src="public/img/ajax-loader.gif">
  </div>
  <div id="infoSection" class="">
  </div>
  <script>
    $('#infoSection').perfectScrollbar();
  </script>
</div>
</body>
</html>