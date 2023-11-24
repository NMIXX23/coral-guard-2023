var wms_layers = [];


        var lyr_OpenStreetMap_0 = new ol.layer.Tile({
            'title': 'OpenStreetMap',
            'type': 'base',
            'opacity': 1.000000,
            
            
            source: new ol.source.XYZ({
    attributions: ' ',
                url: 'https://tile.openstreetmap.org/{z}/{x}/{y}.png'
            })
        });
var format_BatasKawasanTamanNasional_1 = new ol.format.GeoJSON();
var features_BatasKawasanTamanNasional_1 = format_BatasKawasanTamanNasional_1.readFeatures(json_BatasKawasanTamanNasional_1, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_BatasKawasanTamanNasional_1 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_BatasKawasanTamanNasional_1.addFeatures(features_BatasKawasanTamanNasional_1);
var lyr_BatasKawasanTamanNasional_1 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_BatasKawasanTamanNasional_1, 
                style: style_BatasKawasanTamanNasional_1,
                interactive: true,
                title: '<img src="styles/legend/BatasKawasanTamanNasional_1.png" /> Batas Kawasan Taman Nasional'
            });
var format_Zona_2 = new ol.format.GeoJSON();
var features_Zona_2 = format_Zona_2.readFeatures(json_Zona_2, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Zona_2 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Zona_2.addFeatures(features_Zona_2);
var lyr_Zona_2 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_Zona_2, 
                style: style_Zona_2,
                interactive: true,
    title: 'Zona<br />\
    <img src="styles/legend/Zona_2_0.png" /> Inti<br />\
    <img src="styles/legend/Zona_2_1.png" /> Khusus<br />\
    <img src="styles/legend/Zona_2_2.png" /> Pemanfaatan<br />\
    <img src="styles/legend/Zona_2_3.png" /> Perlindungan Bahari<br />\
    <img src="styles/legend/Zona_2_4.png" /> Rehabilitasi<br />\
    <img src="styles/legend/Zona_2_5.png" /> Religi Budaya dan Sejarah<br />\
    <img src="styles/legend/Zona_2_6.png" /> Rimba<br />\
    <img src="styles/legend/Zona_2_7.png" /> Tradisional<br />'
        });
var format_SeagrassTNKarimunJawa_3 = new ol.format.GeoJSON();
var features_SeagrassTNKarimunJawa_3 = format_SeagrassTNKarimunJawa_3.readFeatures(json_SeagrassTNKarimunJawa_3, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SeagrassTNKarimunJawa_3 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SeagrassTNKarimunJawa_3.addFeatures(features_SeagrassTNKarimunJawa_3);
var lyr_SeagrassTNKarimunJawa_3 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_SeagrassTNKarimunJawa_3, 
                style: style_SeagrassTNKarimunJawa_3,
                interactive: true,
                title: '<img src="styles/legend/SeagrassTNKarimunJawa_3.png" /> Seagrass TN Karimun Jawa'
            });
var format_SeagrassTNKepSeribu_4 = new ol.format.GeoJSON();
var features_SeagrassTNKepSeribu_4 = format_SeagrassTNKepSeribu_4.readFeatures(json_SeagrassTNKepSeribu_4, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SeagrassTNKepSeribu_4 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SeagrassTNKepSeribu_4.addFeatures(features_SeagrassTNKepSeribu_4);
var lyr_SeagrassTNKepSeribu_4 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_SeagrassTNKepSeribu_4, 
                style: style_SeagrassTNKepSeribu_4,
                interactive: true,
                title: '<img src="styles/legend/SeagrassTNKepSeribu_4.png" /> Seagrass TN Kep Seribu'
            });
var format_SeagrassTNBaliBarat_5 = new ol.format.GeoJSON();
var features_SeagrassTNBaliBarat_5 = format_SeagrassTNBaliBarat_5.readFeatures(json_SeagrassTNBaliBarat_5, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SeagrassTNBaliBarat_5 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SeagrassTNBaliBarat_5.addFeatures(features_SeagrassTNBaliBarat_5);
var lyr_SeagrassTNBaliBarat_5 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_SeagrassTNBaliBarat_5, 
                style: style_SeagrassTNBaliBarat_5,
                interactive: true,
                title: '<img src="styles/legend/SeagrassTNBaliBarat_5.png" /> Seagrass TN Bali Barat'
            });
var format_SeagrassTNUjungKulon_6 = new ol.format.GeoJSON();
var features_SeagrassTNUjungKulon_6 = format_SeagrassTNUjungKulon_6.readFeatures(json_SeagrassTNUjungKulon_6, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SeagrassTNUjungKulon_6 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SeagrassTNUjungKulon_6.addFeatures(features_SeagrassTNUjungKulon_6);
var lyr_SeagrassTNUjungKulon_6 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_SeagrassTNUjungKulon_6, 
                style: style_SeagrassTNUjungKulon_6,
                interactive: true,
                title: '<img src="styles/legend/SeagrassTNUjungKulon_6.png" /> Seagrass TN Ujung Kulon'
            });
var format_SeagrassLautSukabumi_7 = new ol.format.GeoJSON();
var features_SeagrassLautSukabumi_7 = format_SeagrassLautSukabumi_7.readFeatures(json_SeagrassLautSukabumi_7, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SeagrassLautSukabumi_7 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SeagrassLautSukabumi_7.addFeatures(features_SeagrassLautSukabumi_7);
var lyr_SeagrassLautSukabumi_7 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_SeagrassLautSukabumi_7, 
                style: style_SeagrassLautSukabumi_7,
                interactive: true,
                title: '<img src="styles/legend/SeagrassLautSukabumi_7.png" /> Seagrass Laut Sukabumi'
            });
var format_SeagrassGarutTasikmalaya_8 = new ol.format.GeoJSON();
var features_SeagrassGarutTasikmalaya_8 = format_SeagrassGarutTasikmalaya_8.readFeatures(json_SeagrassGarutTasikmalaya_8, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SeagrassGarutTasikmalaya_8 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SeagrassGarutTasikmalaya_8.addFeatures(features_SeagrassGarutTasikmalaya_8);
var lyr_SeagrassGarutTasikmalaya_8 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_SeagrassGarutTasikmalaya_8, 
                style: style_SeagrassGarutTasikmalaya_8,
                interactive: true,
                title: '<img src="styles/legend/SeagrassGarutTasikmalaya_8.png" /> Seagrass Garut-Tasikmalaya'
            });
var format_SeagrassBlitarMalang_9 = new ol.format.GeoJSON();
var features_SeagrassBlitarMalang_9 = format_SeagrassBlitarMalang_9.readFeatures(json_SeagrassBlitarMalang_9, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SeagrassBlitarMalang_9 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SeagrassBlitarMalang_9.addFeatures(features_SeagrassBlitarMalang_9);
var lyr_SeagrassBlitarMalang_9 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_SeagrassBlitarMalang_9, 
                style: style_SeagrassBlitarMalang_9,
                interactive: true,
                title: '<img src="styles/legend/SeagrassBlitarMalang_9.png" /> Seagrass Blitar-Malang'
            });
var format_SeagrassCagarAlamPulauNusaBarung_10 = new ol.format.GeoJSON();
var features_SeagrassCagarAlamPulauNusaBarung_10 = format_SeagrassCagarAlamPulauNusaBarung_10.readFeatures(json_SeagrassCagarAlamPulauNusaBarung_10, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SeagrassCagarAlamPulauNusaBarung_10 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SeagrassCagarAlamPulauNusaBarung_10.addFeatures(features_SeagrassCagarAlamPulauNusaBarung_10);
var lyr_SeagrassCagarAlamPulauNusaBarung_10 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_SeagrassCagarAlamPulauNusaBarung_10, 
                style: style_SeagrassCagarAlamPulauNusaBarung_10,
                interactive: true,
                title: '<img src="styles/legend/SeagrassCagarAlamPulauNusaBarung_10.png" /> Seagrass Cagar Alam Pulau Nusa Barung'
            });
var format_SeagrassTNAlasPurwo_11 = new ol.format.GeoJSON();
var features_SeagrassTNAlasPurwo_11 = format_SeagrassTNAlasPurwo_11.readFeatures(json_SeagrassTNAlasPurwo_11, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SeagrassTNAlasPurwo_11 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SeagrassTNAlasPurwo_11.addFeatures(features_SeagrassTNAlasPurwo_11);
var lyr_SeagrassTNAlasPurwo_11 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_SeagrassTNAlasPurwo_11, 
                style: style_SeagrassTNAlasPurwo_11,
                interactive: true,
                title: '<img src="styles/legend/SeagrassTNAlasPurwo_11.png" /> Seagrass TN Alas Purwo'
            });
var format_SeagrassBayuwangi_12 = new ol.format.GeoJSON();
var features_SeagrassBayuwangi_12 = format_SeagrassBayuwangi_12.readFeatures(json_SeagrassBayuwangi_12, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SeagrassBayuwangi_12 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SeagrassBayuwangi_12.addFeatures(features_SeagrassBayuwangi_12);
var lyr_SeagrassBayuwangi_12 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_SeagrassBayuwangi_12, 
                style: style_SeagrassBayuwangi_12,
                interactive: true,
                title: '<img src="styles/legend/SeagrassBayuwangi_12.png" /> Seagrass Bayuwangi'
            });
var format_SeagrassTNBaluran_13 = new ol.format.GeoJSON();
var features_SeagrassTNBaluran_13 = format_SeagrassTNBaluran_13.readFeatures(json_SeagrassTNBaluran_13, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SeagrassTNBaluran_13 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SeagrassTNBaluran_13.addFeatures(features_SeagrassTNBaluran_13);
var lyr_SeagrassTNBaluran_13 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_SeagrassTNBaluran_13, 
                style: style_SeagrassTNBaluran_13,
                interactive: true,
                title: '<img src="styles/legend/SeagrassTNBaluran_13.png" /> Seagrass TN Baluran'
            });
var format_SeagrassBaratBanten_14 = new ol.format.GeoJSON();
var features_SeagrassBaratBanten_14 = format_SeagrassBaratBanten_14.readFeatures(json_SeagrassBaratBanten_14, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SeagrassBaratBanten_14 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SeagrassBaratBanten_14.addFeatures(features_SeagrassBaratBanten_14);
var lyr_SeagrassBaratBanten_14 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_SeagrassBaratBanten_14, 
                style: style_SeagrassBaratBanten_14,
                interactive: true,
                title: '<img src="styles/legend/SeagrassBaratBanten_14.png" /> Seagrass Barat Banten'
            });
var format_SeagrassUtaraBanten_15 = new ol.format.GeoJSON();
var features_SeagrassUtaraBanten_15 = format_SeagrassUtaraBanten_15.readFeatures(json_SeagrassUtaraBanten_15, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SeagrassUtaraBanten_15 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SeagrassUtaraBanten_15.addFeatures(features_SeagrassUtaraBanten_15);
var lyr_SeagrassUtaraBanten_15 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_SeagrassUtaraBanten_15, 
                style: style_SeagrassUtaraBanten_15,
                interactive: true,
                title: '<img src="styles/legend/SeagrassUtaraBanten_15.png" /> Seagrass Utara Banten'
            });
var format_SeagrassPulauBawean_16 = new ol.format.GeoJSON();
var features_SeagrassPulauBawean_16 = format_SeagrassPulauBawean_16.readFeatures(json_SeagrassPulauBawean_16, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SeagrassPulauBawean_16 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SeagrassPulauBawean_16.addFeatures(features_SeagrassPulauBawean_16);
var lyr_SeagrassPulauBawean_16 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_SeagrassPulauBawean_16, 
                style: style_SeagrassPulauBawean_16,
                interactive: true,
                title: '<img src="styles/legend/SeagrassPulauBawean_16.png" /> Seagrass Pulau Bawean'
            });
var format_CoralBlitarMalang_17 = new ol.format.GeoJSON();
var features_CoralBlitarMalang_17 = format_CoralBlitarMalang_17.readFeatures(json_CoralBlitarMalang_17, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_CoralBlitarMalang_17 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_CoralBlitarMalang_17.addFeatures(features_CoralBlitarMalang_17);
var lyr_CoralBlitarMalang_17 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_CoralBlitarMalang_17, 
                style: style_CoralBlitarMalang_17,
                interactive: true,
                title: '<img src="styles/legend/CoralBlitarMalang_17.png" /> Coral Blitar-Malang'
            });
var format_CoralLautSukabumi_18 = new ol.format.GeoJSON();
var features_CoralLautSukabumi_18 = format_CoralLautSukabumi_18.readFeatures(json_CoralLautSukabumi_18, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_CoralLautSukabumi_18 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_CoralLautSukabumi_18.addFeatures(features_CoralLautSukabumi_18);
var lyr_CoralLautSukabumi_18 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_CoralLautSukabumi_18, 
                style: style_CoralLautSukabumi_18,
                interactive: true,
                title: '<img src="styles/legend/CoralLautSukabumi_18.png" /> Coral Laut Sukabumi'
            });
var format_CoralGarutTasikmalaya_19 = new ol.format.GeoJSON();
var features_CoralGarutTasikmalaya_19 = format_CoralGarutTasikmalaya_19.readFeatures(json_CoralGarutTasikmalaya_19, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_CoralGarutTasikmalaya_19 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_CoralGarutTasikmalaya_19.addFeatures(features_CoralGarutTasikmalaya_19);
var lyr_CoralGarutTasikmalaya_19 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_CoralGarutTasikmalaya_19, 
                style: style_CoralGarutTasikmalaya_19,
                interactive: true,
                title: '<img src="styles/legend/CoralGarutTasikmalaya_19.png" /> Coral Garut-Tasikmalaya'
            });
var format_CoralCagarAlamPulauNusaBarung_20 = new ol.format.GeoJSON();
var features_CoralCagarAlamPulauNusaBarung_20 = format_CoralCagarAlamPulauNusaBarung_20.readFeatures(json_CoralCagarAlamPulauNusaBarung_20, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_CoralCagarAlamPulauNusaBarung_20 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_CoralCagarAlamPulauNusaBarung_20.addFeatures(features_CoralCagarAlamPulauNusaBarung_20);
var lyr_CoralCagarAlamPulauNusaBarung_20 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_CoralCagarAlamPulauNusaBarung_20, 
                style: style_CoralCagarAlamPulauNusaBarung_20,
                interactive: true,
                title: '<img src="styles/legend/CoralCagarAlamPulauNusaBarung_20.png" /> Coral Cagar Alam Pulau Nusa Barung'
            });
var format_CoralTNAlasPurwo_21 = new ol.format.GeoJSON();
var features_CoralTNAlasPurwo_21 = format_CoralTNAlasPurwo_21.readFeatures(json_CoralTNAlasPurwo_21, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_CoralTNAlasPurwo_21 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_CoralTNAlasPurwo_21.addFeatures(features_CoralTNAlasPurwo_21);
var lyr_CoralTNAlasPurwo_21 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_CoralTNAlasPurwo_21, 
                style: style_CoralTNAlasPurwo_21,
                interactive: true,
                title: '<img src="styles/legend/CoralTNAlasPurwo_21.png" /> Coral TN Alas Purwo'
            });
var format_CoralBayuwangi_22 = new ol.format.GeoJSON();
var features_CoralBayuwangi_22 = format_CoralBayuwangi_22.readFeatures(json_CoralBayuwangi_22, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_CoralBayuwangi_22 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_CoralBayuwangi_22.addFeatures(features_CoralBayuwangi_22);
var lyr_CoralBayuwangi_22 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_CoralBayuwangi_22, 
                style: style_CoralBayuwangi_22,
                interactive: true,
                title: '<img src="styles/legend/CoralBayuwangi_22.png" /> Coral Bayuwangi'
            });
var format_CoralTNBaluran_23 = new ol.format.GeoJSON();
var features_CoralTNBaluran_23 = format_CoralTNBaluran_23.readFeatures(json_CoralTNBaluran_23, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_CoralTNBaluran_23 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_CoralTNBaluran_23.addFeatures(features_CoralTNBaluran_23);
var lyr_CoralTNBaluran_23 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_CoralTNBaluran_23, 
                style: style_CoralTNBaluran_23,
                interactive: true,
                title: '<img src="styles/legend/CoralTNBaluran_23.png" /> Coral TN Baluran'
            });
var format_CoralBaratBanten_24 = new ol.format.GeoJSON();
var features_CoralBaratBanten_24 = format_CoralBaratBanten_24.readFeatures(json_CoralBaratBanten_24, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_CoralBaratBanten_24 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_CoralBaratBanten_24.addFeatures(features_CoralBaratBanten_24);
var lyr_CoralBaratBanten_24 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_CoralBaratBanten_24, 
                style: style_CoralBaratBanten_24,
                interactive: true,
                title: '<img src="styles/legend/CoralBaratBanten_24.png" /> Coral Barat Banten'
            });
var format_CoralUtaraBanten_25 = new ol.format.GeoJSON();
var features_CoralUtaraBanten_25 = format_CoralUtaraBanten_25.readFeatures(json_CoralUtaraBanten_25, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_CoralUtaraBanten_25 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_CoralUtaraBanten_25.addFeatures(features_CoralUtaraBanten_25);
var lyr_CoralUtaraBanten_25 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_CoralUtaraBanten_25, 
                style: style_CoralUtaraBanten_25,
                interactive: true,
                title: '<img src="styles/legend/CoralUtaraBanten_25.png" /> Coral Utara Banten'
            });
var format_CoralPulauBawean_26 = new ol.format.GeoJSON();
var features_CoralPulauBawean_26 = format_CoralPulauBawean_26.readFeatures(json_CoralPulauBawean_26, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_CoralPulauBawean_26 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_CoralPulauBawean_26.addFeatures(features_CoralPulauBawean_26);
var lyr_CoralPulauBawean_26 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_CoralPulauBawean_26, 
                style: style_CoralPulauBawean_26,
                interactive: true,
                title: '<img src="styles/legend/CoralPulauBawean_26.png" /> Coral Pulau Bawean'
            });
var format_CoralTNKarimunJawa_27 = new ol.format.GeoJSON();
var features_CoralTNKarimunJawa_27 = format_CoralTNKarimunJawa_27.readFeatures(json_CoralTNKarimunJawa_27, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_CoralTNKarimunJawa_27 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_CoralTNKarimunJawa_27.addFeatures(features_CoralTNKarimunJawa_27);
var lyr_CoralTNKarimunJawa_27 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_CoralTNKarimunJawa_27, 
                style: style_CoralTNKarimunJawa_27,
                interactive: true,
                title: '<img src="styles/legend/CoralTNKarimunJawa_27.png" /> Coral TN Karimun Jawa'
            });
var format_CoralTNUjungKulon_28 = new ol.format.GeoJSON();
var features_CoralTNUjungKulon_28 = format_CoralTNUjungKulon_28.readFeatures(json_CoralTNUjungKulon_28, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_CoralTNUjungKulon_28 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_CoralTNUjungKulon_28.addFeatures(features_CoralTNUjungKulon_28);
var lyr_CoralTNUjungKulon_28 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_CoralTNUjungKulon_28, 
                style: style_CoralTNUjungKulon_28,
                interactive: true,
                title: '<img src="styles/legend/CoralTNUjungKulon_28.png" /> Coral TN Ujung Kulon'
            });
var format_CoralTNBaliBarat_29 = new ol.format.GeoJSON();
var features_CoralTNBaliBarat_29 = format_CoralTNBaliBarat_29.readFeatures(json_CoralTNBaliBarat_29, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_CoralTNBaliBarat_29 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_CoralTNBaliBarat_29.addFeatures(features_CoralTNBaliBarat_29);
var lyr_CoralTNBaliBarat_29 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_CoralTNBaliBarat_29, 
                style: style_CoralTNBaliBarat_29,
                interactive: true,
                title: '<img src="styles/legend/CoralTNBaliBarat_29.png" /> Coral TN Bali Barat'
            });
var format_CoralTNKepSeribu_30 = new ol.format.GeoJSON();
var features_CoralTNKepSeribu_30 = format_CoralTNKepSeribu_30.readFeatures(json_CoralTNKepSeribu_30, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_CoralTNKepSeribu_30 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_CoralTNKepSeribu_30.addFeatures(features_CoralTNKepSeribu_30);
var lyr_CoralTNKepSeribu_30 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_CoralTNKepSeribu_30, 
                style: style_CoralTNKepSeribu_30,
                interactive: true,
                title: '<img src="styles/legend/CoralTNKepSeribu_30.png" /> Coral TN Kep Seribu'
            });
var format_KondisiTerumbuKarang_31 = new ol.format.GeoJSON();
var features_KondisiTerumbuKarang_31 = format_KondisiTerumbuKarang_31.readFeatures(json_KondisiTerumbuKarang_31, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_KondisiTerumbuKarang_31 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_KondisiTerumbuKarang_31.addFeatures(features_KondisiTerumbuKarang_31);
var lyr_KondisiTerumbuKarang_31 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_KondisiTerumbuKarang_31, 
                style: style_KondisiTerumbuKarang_31,
                interactive: true,
    title: 'Kondisi Terumbu Karang<br />\
    <img src="styles/legend/KondisiTerumbuKarang_31_0.png" /> Baik<br />\
    <img src="styles/legend/KondisiTerumbuKarang_31_1.png" /> Sedang<br />\
    <img src="styles/legend/KondisiTerumbuKarang_31_2.png" /> Rendah<br />\
    <img src="styles/legend/KondisiTerumbuKarang_31_3.png" /> Buruk<br />'
        });
var group_CoralTamanNasional = new ol.layer.Group({
                                layers: [lyr_CoralTNKarimunJawa_27,lyr_CoralTNUjungKulon_28,lyr_CoralTNBaliBarat_29,lyr_CoralTNKepSeribu_30,],
                                title: "Coral Taman Nasional"});
var group_Coral = new ol.layer.Group({
                                layers: [lyr_CoralBlitarMalang_17,lyr_CoralLautSukabumi_18,lyr_CoralGarutTasikmalaya_19,lyr_CoralCagarAlamPulauNusaBarung_20,lyr_CoralTNAlasPurwo_21,lyr_CoralBayuwangi_22,lyr_CoralTNBaluran_23,lyr_CoralBaratBanten_24,lyr_CoralUtaraBanten_25,lyr_CoralPulauBawean_26,],
                                title: "Coral"});
var group_Seagrass = new ol.layer.Group({
                                layers: [lyr_SeagrassTNKarimunJawa_3,lyr_SeagrassTNKepSeribu_4,lyr_SeagrassTNBaliBarat_5,lyr_SeagrassTNUjungKulon_6,lyr_SeagrassLautSukabumi_7,lyr_SeagrassGarutTasikmalaya_8,lyr_SeagrassBlitarMalang_9,lyr_SeagrassCagarAlamPulauNusaBarung_10,lyr_SeagrassTNAlasPurwo_11,lyr_SeagrassBayuwangi_12,lyr_SeagrassTNBaluran_13,lyr_SeagrassBaratBanten_14,lyr_SeagrassUtaraBanten_15,lyr_SeagrassPulauBawean_16,],
                                title: "Seagrass"});
var group_InformasiLainnya = new ol.layer.Group({
                                layers: [lyr_OpenStreetMap_0,lyr_BatasKawasanTamanNasional_1,lyr_Zona_2,],
                                title: "Informasi Lainnya"});

lyr_OpenStreetMap_0.setVisible(true);lyr_BatasKawasanTamanNasional_1.setVisible(true);lyr_Zona_2.setVisible(true);lyr_SeagrassTNKarimunJawa_3.setVisible(true);lyr_SeagrassTNKepSeribu_4.setVisible(true);lyr_SeagrassTNBaliBarat_5.setVisible(true);lyr_SeagrassTNUjungKulon_6.setVisible(true);lyr_SeagrassLautSukabumi_7.setVisible(true);lyr_SeagrassGarutTasikmalaya_8.setVisible(true);lyr_SeagrassBlitarMalang_9.setVisible(true);lyr_SeagrassCagarAlamPulauNusaBarung_10.setVisible(true);lyr_SeagrassTNAlasPurwo_11.setVisible(true);lyr_SeagrassBayuwangi_12.setVisible(true);lyr_SeagrassTNBaluran_13.setVisible(true);lyr_SeagrassBaratBanten_14.setVisible(true);lyr_SeagrassUtaraBanten_15.setVisible(true);lyr_SeagrassPulauBawean_16.setVisible(true);lyr_CoralBlitarMalang_17.setVisible(true);lyr_CoralLautSukabumi_18.setVisible(true);lyr_CoralGarutTasikmalaya_19.setVisible(true);lyr_CoralCagarAlamPulauNusaBarung_20.setVisible(true);lyr_CoralTNAlasPurwo_21.setVisible(true);lyr_CoralBayuwangi_22.setVisible(true);lyr_CoralTNBaluran_23.setVisible(true);lyr_CoralBaratBanten_24.setVisible(true);lyr_CoralUtaraBanten_25.setVisible(true);lyr_CoralPulauBawean_26.setVisible(true);lyr_CoralTNKarimunJawa_27.setVisible(true);lyr_CoralTNUjungKulon_28.setVisible(true);lyr_CoralTNBaliBarat_29.setVisible(true);lyr_CoralTNKepSeribu_30.setVisible(true);lyr_KondisiTerumbuKarang_31.setVisible(true);
var layersList = [group_InformasiLainnya,group_Seagrass,group_Coral,group_CoralTamanNasional,lyr_KondisiTerumbuKarang_31];
lyr_BatasKawasanTamanNasional_1.set('fieldAliases', {'fid': 'fid', 'Id': 'Id', 'Region': 'Region', });
lyr_Zona_2.set('fieldAliases', {'fid': 'fid', 'OBJECTID': 'OBJECTID', 'Id_1': 'Id_1', 'Zona': 'Zona', 'Region_1': 'Region_1', 'Shape_Leng': 'Shape_Leng', 'Shape_Area': 'Shape_Area', });
lyr_SeagrassTNKarimunJawa_3.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_SeagrassTNKepSeribu_4.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_SeagrassTNBaliBarat_5.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_SeagrassTNUjungKulon_6.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_SeagrassLautSukabumi_7.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_SeagrassGarutTasikmalaya_8.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_SeagrassBlitarMalang_9.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_SeagrassCagarAlamPulauNusaBarung_10.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_SeagrassTNAlasPurwo_11.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_SeagrassBayuwangi_12.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_SeagrassTNBaluran_13.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_SeagrassBaratBanten_14.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_SeagrassUtaraBanten_15.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_SeagrassPulauBawean_16.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_CoralBlitarMalang_17.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_CoralLautSukabumi_18.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_CoralGarutTasikmalaya_19.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_CoralCagarAlamPulauNusaBarung_20.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_CoralTNAlasPurwo_21.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_CoralBayuwangi_22.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_CoralTNBaluran_23.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_CoralBaratBanten_24.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_CoralUtaraBanten_25.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_CoralPulauBawean_26.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_CoralTNKarimunJawa_27.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_CoralTNUjungKulon_28.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_CoralTNBaliBarat_29.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_CoralTNKepSeribu_30.set('fieldAliases', {'fid': 'fid', 'class': 'class', 'Lokasi': 'Lokasi', 'Koordinat system': 'Koordinat system', 'Luas (ha)': 'Luas (ha)', 'Sumber data': 'Sumber data', 'Gambar': 'Gambar', });
lyr_KondisiTerumbuKarang_31.set('fieldAliases', {'fid': 'fid', 'Id': 'Id', 'Kategori': 'Kategori', 'Region': 'Region', });
lyr_BatasKawasanTamanNasional_1.set('fieldImages', {'fid': 'TextEdit', 'Id': 'Range', 'Region': 'TextEdit', });
lyr_Zona_2.set('fieldImages', {'fid': 'TextEdit', 'OBJECTID': 'TextEdit', 'Id_1': 'TextEdit', 'Zona': 'TextEdit', 'Region_1': 'TextEdit', 'Shape_Leng': 'TextEdit', 'Shape_Area': 'TextEdit', });
lyr_SeagrassTNKarimunJawa_3.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_SeagrassTNKepSeribu_4.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_SeagrassTNBaliBarat_5.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_SeagrassTNUjungKulon_6.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_SeagrassLautSukabumi_7.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_SeagrassGarutTasikmalaya_8.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_SeagrassBlitarMalang_9.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_SeagrassCagarAlamPulauNusaBarung_10.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_SeagrassTNAlasPurwo_11.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_SeagrassBayuwangi_12.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_SeagrassTNBaluran_13.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_SeagrassBaratBanten_14.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_SeagrassUtaraBanten_15.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_SeagrassPulauBawean_16.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_CoralBlitarMalang_17.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_CoralLautSukabumi_18.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_CoralGarutTasikmalaya_19.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_CoralCagarAlamPulauNusaBarung_20.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_CoralTNAlasPurwo_21.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_CoralBayuwangi_22.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_CoralTNBaluran_23.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_CoralBaratBanten_24.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_CoralUtaraBanten_25.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_CoralPulauBawean_26.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_CoralTNKarimunJawa_27.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_CoralTNUjungKulon_28.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_CoralTNBaliBarat_29.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_CoralTNKepSeribu_30.set('fieldImages', {'fid': 'TextEdit', 'class': 'TextEdit', 'Lokasi': 'TextEdit', 'Koordinat system': 'TextEdit', 'Luas (ha)': 'TextEdit', 'Sumber data': 'TextEdit', 'Gambar': 'TextEdit', });
lyr_KondisiTerumbuKarang_31.set('fieldImages', {'fid': 'TextEdit', 'Id': 'Range', 'Kategori': 'TextEdit', 'Region': 'TextEdit', });
lyr_BatasKawasanTamanNasional_1.set('fieldLabels', {});
lyr_Zona_2.set('fieldLabels', {});
lyr_SeagrassTNKarimunJawa_3.set('fieldLabels', {});
lyr_SeagrassTNKepSeribu_4.set('fieldLabels', {});
lyr_SeagrassTNBaliBarat_5.set('fieldLabels', {});
lyr_SeagrassTNUjungKulon_6.set('fieldLabels', {});
lyr_SeagrassLautSukabumi_7.set('fieldLabels', {});
lyr_SeagrassGarutTasikmalaya_8.set('fieldLabels', {});
lyr_SeagrassBlitarMalang_9.set('fieldLabels', {});
lyr_SeagrassCagarAlamPulauNusaBarung_10.set('fieldLabels', {});
lyr_SeagrassTNAlasPurwo_11.set('fieldLabels', {});
lyr_SeagrassBayuwangi_12.set('fieldLabels', {});
lyr_SeagrassTNBaluran_13.set('fieldLabels', {});
lyr_SeagrassBaratBanten_14.set('fieldLabels', {});
lyr_SeagrassUtaraBanten_15.set('fieldLabels', {});
lyr_SeagrassPulauBawean_16.set('fieldLabels', {});
lyr_CoralBlitarMalang_17.set('fieldLabels', {});
lyr_CoralLautSukabumi_18.set('fieldLabels', {});
lyr_CoralGarutTasikmalaya_19.set('fieldLabels', {});
lyr_CoralCagarAlamPulauNusaBarung_20.set('fieldLabels', {});
lyr_CoralTNAlasPurwo_21.set('fieldLabels', {});
lyr_CoralBayuwangi_22.set('fieldLabels', {});
lyr_CoralTNBaluran_23.set('fieldLabels', {});
lyr_CoralBaratBanten_24.set('fieldLabels', {});
lyr_CoralUtaraBanten_25.set('fieldLabels', {});
lyr_CoralPulauBawean_26.set('fieldLabels', {});
lyr_CoralTNKarimunJawa_27.set('fieldLabels', {});
lyr_CoralTNUjungKulon_28.set('fieldLabels', {});
lyr_CoralTNBaliBarat_29.set('fieldLabels', {});
lyr_CoralTNKepSeribu_30.set('fieldLabels', {});
lyr_KondisiTerumbuKarang_31.set('fieldLabels', {'fid': 'no label', 'Id': 'no label', 'Kategori': 'inline label', 'Region': 'inline label', });
lyr_KondisiTerumbuKarang_31.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});