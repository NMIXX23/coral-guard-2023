var size = 0;
var placement = 'point';
function categories_Zona_2(feature, value, size, resolution, labelText,
                       labelFont, labelFill, bufferColor, bufferWidth,
                       placement) {
                switch(value.toString()) {case 'Inti':
                    return [ new ol.style.Style({
        fill: new ol.style.Fill({color: 'rgba(213,43,51,1.0)'}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                              labelFill, placement, bufferColor,
                              bufferWidth)
    })];
                    break;
case 'Khusus':
                    return [ new ol.style.Style({
        fill: new ol.style.Fill({color: 'rgba(210,209,199,1.0)'}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                              labelFill, placement, bufferColor,
                              bufferWidth)
    })];
                    break;
case 'Pemanfaatan':
                    return [ new ol.style.Style({
        fill: new ol.style.Fill({color: 'rgba(180,237,24,1.0)'}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                              labelFill, placement, bufferColor,
                              bufferWidth)
    })];
                    break;
case 'Perlindungan Bahari':
                    return [ new ol.style.Style({
        fill: new ol.style.Fill({color: 'rgba(97,144,220,1.0)'}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                              labelFill, placement, bufferColor,
                              bufferWidth)
    })];
                    break;
case 'Rehabilitasi':
                    return [ new ol.style.Style({
        fill: new ol.style.Fill({color: 'rgba(1,255,238,1.0)'}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                              labelFill, placement, bufferColor,
                              bufferWidth)
    })];
                    break;
case 'Religi Budaya dan Sejarah':
                    return [ new ol.style.Style({
        fill: new ol.style.Fill({color: 'rgba(255,1,234,1.0)'}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                              labelFill, placement, bufferColor,
                              bufferWidth)
    })];
                    break;
case 'Rimba':
                    return [ new ol.style.Style({
        fill: new ol.style.Fill({color: 'rgba(224,226,76,1.0)'}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                              labelFill, placement, bufferColor,
                              bufferWidth)
    })];
                    break;
case 'Tradisional':
                    return [ new ol.style.Style({
        fill: new ol.style.Fill({color: 'rgba(140,113,24,1.0)'}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                              labelFill, placement, bufferColor,
                              bufferWidth)
    })];
                    break;}};

var style_Zona_2 = function(feature, resolution){
    var context = {
        feature: feature,
        variables: {}
    };
    var value = feature.get("Zona");
    var labelText = "";
    size = 0;
    var labelFont = "10px, sans-serif";
    var labelFill = "#000000";
    var bufferColor = "";
    var bufferWidth = 0;
    var textAlign = "left";
    var offsetX = 8;
    var offsetY = 3;
    var placement = 'point';
    if ("" !== null) {
        labelText = String("");
    }
    
var style = categories_Zona_2(feature, value, size, resolution, labelText,
                          labelFont, labelFill, bufferColor,
                          bufferWidth, placement);

    return style;
};
