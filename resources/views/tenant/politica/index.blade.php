<x-app-tenant-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-diagramador></x-diagramador>
    <div class="container">
        <div class="row justify-content-between mt-5">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <h4>Diagramador de Política de Negocio</h4>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 justify-content-end">
                <button class="btn btn-sm btn-dark" onclick="printDiagram()" _msthash="273273"
                    _msttexthash="498238">Imprimir diagrama con SVG</button>
            </div>
        </div>

        <div id="allSampleContent" class="p-4 w-full">

            <script id="code">
                function init() {
                    if (window.goSamples) goSamples(); // init for these samples -- you don't need to call this

                    // Since 2.2 you can also author concise templates with method chaining instead of GraphObject.make
                    // For details, see https://gojs.net/latest/intro/buildingObjects.html
                    const $ = go.GraphObject.make; // for conciseness in defining templates

                    myDiagram =
                        $(go.Diagram, "myDiagramDiv", // must name or refer to the DIV HTML element
                            {
                                "LinkDrawn": showLinkLabel, // this DiagramEvent listener is defined below
                                "LinkRelinked": showLinkLabel,
                                "undoManager.isEnabled": true // enable undo & redo
                            });

                    // when the document is modified, add a "*" to the title and enable the "Save" button
                    myDiagram.addDiagramListener("Modified", e => {
                        var button = document.getElementById("SaveButton");
                        if (button) button.disabled = !myDiagram.isModified;
                        var idx = document.title.indexOf("*");
                        if (myDiagram.isModified) {
                            if (idx < 0) document.title += "*";
                        } else {
                            if (idx >= 0) document.title = document.title.slice(0, idx);
                        }
                    });

                    // helper definitions for node templates

                    function nodeStyle() {
                        return [
                            // The Node.location comes from the "loc" property of the node data,
                            // converted by the Point.parse static method.
                            // If the Node.location is changed, it updates the "loc" property of the node data,
                            // converting back using the Point.stringify static method.
                            new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
                            {
                                // the Node.location is at the center of each node
                                locationSpot: go.Spot.Center
                            }
                        ];
                    }

                    // Define a function for creating a "port" that is normally transparent.
                    // The "name" is used as the GraphObject.portId,
                    // the "align" is used to determine where to position the port relative to the body of the node,
                    // the "spot" is used to control how links connect with the port and whether the port
                    // stretches along the side of the node,
                    // and the boolean "output" and "input" arguments control whether the user can draw links from or to the port.
                    function makePort(name, align, spot, output, input) {
                        var horizontal = align.equals(go.Spot.Top) || align.equals(go.Spot.Bottom);
                        // the port is basically just a transparent rectangle that stretches along the side of the node,
                        // and becomes colored when the mouse passes over it
                        return $(go.Shape, {
                            fill: "transparent", // changed to a color in the mouseEnter event handler
                            strokeWidth: 0, // no stroke
                            width: horizontal ? NaN : 8, // if not stretching horizontally, just 8 wide
                            height: !horizontal ? NaN : 8, // if not stretching vertically, just 8 tall
                            alignment: align, // align the port on the main Shape
                            stretch: (horizontal ? go.GraphObject.Horizontal : go.GraphObject.Vertical),
                            portId: name, // declare this object to be a "port"
                            fromSpot: spot, // declare where links may connect at this port
                            fromLinkable: output, // declare whether the user may draw links from here
                            toSpot: spot, // declare where links may connect at this port
                            toLinkable: input, // declare whether the user may draw links to here
                            cursor: "pointer", // show a different cursor to indicate potential link point
                            mouseEnter: (e, port) => { // the PORT argument will be this Shape
                                if (!e.diagram.isReadOnly) port.fill = "rgba(255,0,255,0.5)";
                            },
                            mouseLeave: (e, port) => port.fill = "transparent"
                        });
                    }

                    function textStyle() {
                        return {
                            font: "bold 11pt Lato, Helvetica, Arial, sans-serif",
                            stroke: "#000000"
                        }
                    }

                    // define the Node templates for regular nodes

                    myDiagram.nodeTemplateMap.add("", // the default category
                        $(go.Node, "Table", nodeStyle(),
                            // the main object is a Panel that surrounds a TextBlock with a rectangular Shape
                            $(go.Panel, "Auto",
                                $(go.Shape, "Rectangle", {
                                        fill: "#ffffff",
                                        stroke: "#00A9C9",
                                        strokeWidth: 3.5
                                    },
                                    new go.Binding("figure", "figure")),
                                $(go.TextBlock, textStyle(), {
                                        margin: 8,
                                        maxSize: new go.Size(160, NaN),
                                        wrap: go.TextBlock.WrapFit,
                                        editable: true
                                    },
                                    new go.Binding("text").makeTwoWay())
                            ),
                            // four named ports, one on each side:
                            makePort("T", go.Spot.Top, go.Spot.TopSide, false, true),
                            makePort("L", go.Spot.Left, go.Spot.LeftSide, true, true),
                            makePort("R", go.Spot.Right, go.Spot.RightSide, true, true),
                            makePort("B", go.Spot.Bottom, go.Spot.BottomSide, true, false)
                        ));

                    myDiagram.nodeTemplateMap.add("Conditional",
                        $(go.Node, "Table", nodeStyle(),
                            // the main object is a Panel that surrounds a TextBlock with a rectangular Shape
                            $(go.Panel, "Auto",
                                $(go.Shape, "Diamond", {
                                        fill: "#ffffff",
                                        stroke: "#00A9C9",
                                        strokeWidth: 3.5
                                    },
                                    new go.Binding("figure", "figure")),
                                $(go.TextBlock, textStyle(), {
                                        margin: 8,
                                        maxSize: new go.Size(160, NaN),
                                        wrap: go.TextBlock.WrapFit,
                                        editable: true
                                    },
                                    new go.Binding("text").makeTwoWay())
                            ),
                            // four named ports, one on each side:
                            makePort("T", go.Spot.Top, go.Spot.Top, false, true),
                            makePort("L", go.Spot.Left, go.Spot.Left, true, true),
                            makePort("R", go.Spot.Right, go.Spot.Right, true, true),
                            makePort("B", go.Spot.Bottom, go.Spot.Bottom, true, false)
                        ));

                    myDiagram.nodeTemplateMap.add("Start",
                        $(go.Node, "Table", nodeStyle(),
                            $(go.Panel, "Spot",
                                $(go.Shape, "Circle", {
                                    desiredSize: new go.Size(70, 70),
                                    fill: "#ffffff",
                                    stroke: "#09d3ac",
                                    strokeWidth: 3.5
                                }),
                                $(go.TextBlock, "Start", textStyle(),
                                    new go.Binding("text"))
                            ),
                            // three named ports, one on each side except the top, all output only:
                            makePort("L", go.Spot.Left, go.Spot.Left, true, false),
                            makePort("R", go.Spot.Right, go.Spot.Right, true, false),
                            makePort("B", go.Spot.Bottom, go.Spot.Bottom, true, false)
                        ));

                    myDiagram.nodeTemplateMap.add("End",
                        $(go.Node, "Table", nodeStyle(),
                            $(go.Panel, "Spot",
                                $(go.Shape, "Circle", {
                                    desiredSize: new go.Size(60, 60),
                                    fill: "#ffffff",
                                    stroke: "#DC3C00",
                                    strokeWidth: 3.5
                                }),
                                $(go.TextBlock, "End", textStyle(),
                                    new go.Binding("text"))
                            ),
                            // three named ports, one on each side except the bottom, all input only:
                            makePort("T", go.Spot.Top, go.Spot.Top, false, true),
                            makePort("L", go.Spot.Left, go.Spot.Left, false, true),
                            makePort("R", go.Spot.Right, go.Spot.Right, false, true)
                        ));

                    // taken from ../extensions/Figures.js:
                    go.Shape.defineFigureGenerator("File", (shape, w, h) => {
                        var geo = new go.Geometry();
                        var fig = new go.PathFigure(0, 0, true); // starting point
                        geo.add(fig);
                        fig.add(new go.PathSegment(go.PathSegment.Line, .75 * w, 0));
                        fig.add(new go.PathSegment(go.PathSegment.Line, w, .25 * h));
                        fig.add(new go.PathSegment(go.PathSegment.Line, w, h));
                        fig.add(new go.PathSegment(go.PathSegment.Line, 0, h).close());
                        var fig2 = new go.PathFigure(.75 * w, 0, false);
                        geo.add(fig2);
                        // The Fold
                        fig2.add(new go.PathSegment(go.PathSegment.Line, .75 * w, .25 * h));
                        fig2.add(new go.PathSegment(go.PathSegment.Line, w, .25 * h));
                        geo.spot1 = new go.Spot(0, .25);
                        geo.spot2 = go.Spot.BottomRight;
                        return geo;
                    });

                    myDiagram.nodeTemplateMap.add("Comment",
                        $(go.Node, "Auto", nodeStyle(),
                            $(go.Shape, "File", {
                                fill: "#ffffff",
                                stroke: "#DEE0A3",
                                strokeWidth: 3
                            }),
                            $(go.TextBlock, textStyle(), {
                                    margin: 8,
                                    maxSize: new go.Size(200, NaN),
                                    wrap: go.TextBlock.WrapFit,
                                    textAlign: "center",
                                    editable: true
                                },
                                new go.Binding("text").makeTwoWay())
                            // no ports, because no links are allowed to connect with a comment
                        ));


                    // replace the default Link template in the linkTemplateMap
                    myDiagram.linkTemplate =
                        $(go.Link, // the whole link panel
                            {
                                routing: go.Link.AvoidsNodes,
                                curve: go.Link.JumpOver,
                                corner: 5,
                                toShortLength: 4,
                                relinkableFrom: true,
                                relinkableTo: true,
                                reshapable: true,
                                resegmentable: true,
                                // mouse-overs subtly highlight links:
                                mouseEnter: (e, link) => link.findObject("HIGHLIGHT").stroke = "rgba(30,144,255,0.2)",
                                mouseLeave: (e, link) => link.findObject("HIGHLIGHT").stroke = "transparent",
                                selectionAdorned: false
                            },
                            new go.Binding("points").makeTwoWay(),
                            $(go.Shape, // the highlight shape, normally transparent
                                {
                                    isPanelMain: true,
                                    strokeWidth: 8,
                                    stroke: "transparent",
                                    name: "HIGHLIGHT"
                                }),
                            $(go.Shape, // the link path shape
                                {
                                    isPanelMain: true,
                                    stroke: "gray",
                                    strokeWidth: 2
                                },
                                new go.Binding("stroke", "isSelected", sel => sel ? "dodgerblue" : "gray").ofObject()),
                            $(go.Shape, // the arrowhead
                                {
                                    toArrow: "standard",
                                    strokeWidth: 0,
                                    fill: "gray"
                                }),
                            $(go.Panel, "Auto", // the link label, normally not visible
                                {
                                    visible: false,
                                    name: "LABEL",
                                    segmentIndex: 2,
                                    segmentFraction: 0.5
                                },
                                new go.Binding("visible", "visible").makeTwoWay(),
                                $(go.Shape, "RoundedRectangle", // the label shape
                                    {
                                        fill: "#F8F8F8",
                                        strokeWidth: 0
                                    }),
                                $(go.TextBlock, "Yes", // the label
                                    {
                                        textAlign: "center",
                                        font: "10pt helvetica, arial, sans-serif",
                                        stroke: "#333333",
                                        editable: true
                                    },
                                    new go.Binding("text").makeTwoWay())
                            )
                        );

                    // Make link labels visible if coming out of a "conditional" node.
                    // This listener is called by the "LinkDrawn" and "LinkRelinked" DiagramEvents.
                    function showLinkLabel(e) {
                        var label = e.subject.findObject("LABEL");
                        if (label !== null) label.visible = (e.subject.fromNode.data.category === "Conditional");
                    }

                    // temporary links used by LinkingTool and RelinkingTool are also orthogonal:
                    myDiagram.toolManager.linkingTool.temporaryLink.routing = go.Link.Orthogonal;
                    myDiagram.toolManager.relinkingTool.temporaryLink.routing = go.Link.Orthogonal;

                    load(); // load an initial diagram from some JSON text

                    // initialize the Palette that is on the left side of the page
                    myPalette =
                        $(go.Palette, "myPaletteDiv", // must name or refer to the DIV HTML element
                            {
                                // Instead of the default animation, use a custom fade-down
                                "animationManager.initialAnimationStyle": go.AnimationManager.None,
                                "InitialAnimationStarting": animateFadeDown, // Instead, animate with this function

                                nodeTemplateMap: myDiagram.nodeTemplateMap, // share the templates used by myDiagram
                                model: new go.GraphLinksModel([ // specify the contents of the Palette
                                    {
                                        category: "Start",
                                        text: "Inicio"
                                    },
                                    {
                                        text: "Paso"
                                    },
                                    {
                                        category: "Conditional",
                                        text: "???"
                                    },
                                    {
                                        category: "End",
                                        text: "Fin"
                                    },
                                    {
                                        category: "Comment",
                                        text: "Comentario"
                                    }
                                ])
                            });

                    // This is a re-implementation of the default animation, except it fades in from downwards, instead of upwards.
                    function animateFadeDown(e) {
                        var diagram = e.diagram;
                        var animation = new go.Animation();
                        animation.isViewportUnconstrained = true; // So Diagram positioning rules let the animation start off-screen
                        animation.easing = go.Animation.EaseOutExpo;
                        animation.duration = 900;
                        // Fade "down", in other words, fade in from above
                        animation.add(diagram, 'position', diagram.position.copy().offset(0, 200), diagram.position);
                        animation.add(diagram, 'opacity', 0, 1);
                        animation.start();
                    }

                } // end init


                // Show the diagram's model in JSON format that the user may edit
                function save() {
                    document.getElementById("mySavedModel").value = myDiagram.model.toJson();
                    myDiagram.isModified = false;
                }

                function load() {
                    myDiagram.model = go.Model.fromJson(document.getElementById("mySavedModel").value);
                }

                // print the diagram by opening a new window holding SVG images of the diagram contents for each page
                function printDiagram() {
                    var svgWindow = window.open();
                    if (!svgWindow) return; // failure to open a new Window
                    var printSize = new go.Size(700, 960);
                    var bnds = myDiagram.documentBounds;
                    var x = bnds.x;
                    var y = bnds.y;
                    while (y < bnds.bottom) {
                        while (x < bnds.right) {
                            var svg = myDiagram.makeSvg({
                                scale: 1.0,
                                position: new go.Point(x, y),
                                size: printSize
                            });
                            svgWindow.document.body.appendChild(svg);
                            x += printSize.width;
                        }
                        x = bnds.x;
                        y += printSize.height;
                    }
                    setTimeout(() => svgWindow.print(), 1);
                }
                window.addEventListener('DOMContentLoaded', init);
            </script>
            <div id="sample">
                <div style="width: 100%; display: flex; justify-content: space-between">
                    <div id="myPaletteDiv"
                        style="width: 100px; margin-right: 2px; background-color: rgb(160, 160, 160); position: relative; -webkit-tap-highlight-color: rgba(255, 255, 255, 0);">
                        <canvas tabindex="0" width="100" height="750"
                            style="position: absolute; top: 0px; left: 0px; z-index: 2; user-select: none; touch-action: none; width: 100px; height: 750px;"
                            _msthash="460109" _msttexthash="2898779">Este texto se muestra si el navegador no admite el
                            elemento HTML canvas.
                        </canvas>
                        <div style="position: absolute; overflow: auto; width: 100px; height: 750px; z-index: 1;">
                            <div style="position: absolute; width: 1px; height: 1px;"></div>
                        </div>
                    </div>
                    <div id="myDiagramDiv"
                        style="flex-grow: 1; height: 750px; background-color: rgb(255, 255, 255); position: relative; -webkit-tap-highlight-color: rgba(255, 255, 255, 0); cursor: auto;">
                        <canvas tabindex="0" width="954" height="750"
                            style="position: absolute; top: 0px; left: 0px; z-index: 2; user-select: none; touch-action: none; width: 954px; height: 750px; cursor: auto;"
                            _msthash="453206" _msttexthash="2898779">Este texto se muestra si el navegador no admite el
                            elemento HTML canvas.</canvas>
                        <div style="position: absolute; overflow: auto; width: 954px; height: 750px; z-index: 1;">
                            <div style="position: absolute; width: 1px; height: 1px;"></div>
                        </div>
                    </div>
                </div>
                {{-- <p _msthash="145522" _msttexthash="23217038"> El ejemplo flowchart muestra varias características clave de
                GoJS, a saber, <a href="../intro/palette.html" _istranslated="1">paleta</a>s, <a
                    href="../intro/links.html" _istranslated="1">nodos enlazables</a>, comportamiento de arrastrar /
                soltar, <a href="../intro/textBlocks.html" _istranslated="1">edición de texto</a> y el uso de <a
                    href="../intro/templateMaps.html" _istranslated="1">mapas de plantilla de nodo</a> en diagramas.
            </p>
            <p _msthash="145639" _msttexthash="47415511"> Pase el ratón sobre un nodo para ver sus puertos. Arrastre
                desde estos puertos para crear nuevos vínculos. La selección de Enlaces le permite volver a darles forma
                y volver a vincularlos. Seleccionar un nodo y luego hacer clic en su TextBlock le permitirá editar texto
                (excepto en los nodos inicio y final). </p> --}}
                <button class="btn btn-sm btn-dark" id="SaveButton" onclick="save()" _msthash="157508" _msttexthash="77272">Salvar</button>
                <button class="btn btn-sm btn-dark" onclick="load()" _msthash="272727" _msttexthash="56784">Carga</button>
                <font _mstmutation="1" _msthash="79066" _msttexthash="1326731796"> Modelo de diagrama guardado en
                    formato
                    JSON:
                    <textarea id="mySavedModel" style="width:100%;height:300px" _mstmutation="1" _istranslated="1">{ "class": "GraphLinksModel",
                    "linkFromPortIdProperty": "fromPort",
                    "linkToPortIdProperty": "toPort",
                    "nodeDataArray": [
                  {"category":"Start","text":"Inicio","key":-1,"loc":"135 -678.390625"},
                  {"text":"Solicitar credito","key":-2,"loc":"135 -566.390625"},
                  {"text":"Preparar documentaci\u00f3n","key":-3,"loc":"135 -489.390625"},
                  {"text":"Entregar documentaci\u00f3n al \u00e1rea asesor de cr\u00e9dito","key":-4,"loc":"135 -392.390625"},
                  {"category":"Conditional","text":"\u00bfAceptado?","key":-5,"loc":"135 -285.390625"},
                  {"text":"Se suben los documentos legales","key":-6,"loc":"395 -285.390625"},
                  {"text":"Rellenar formulario","key":-7,"loc":"399 -566.390625"},
                  {"category":"Comment","text":"Se debe rellenar el formulario para realizar la solicitud del cr\u00e9dito","key":-8,"loc":"409 -643.390625"},
                  {"text":"Comite de cr\u00e9dito manda los documentos al asesor de credito","key":-9,"loc":"133 -114.390625"}
                  ],
                    "linkDataArray": [
                  {"from":-1,"to":-2,"fromPort":"B","toPort":"T","points":[135,-641.640625,135,-631.640625,135,-612.8594871520996,135,-612.8594871520996,135,-594.0783493041993,135,-584.0783493041993]},
                  {"from":-2,"to":-3,"fromPort":"B","toPort":"T","points":[135,-548.7029006958008,135,-538.7029006958008,135,-531.8594871520996,135,-531.8594871520996,135,-525.0160736083984,135,-515.0160736083984]},
                  {"from":-3,"to":-4,"fromPort":"B","toPort":"T","points":[135,-463.7651763916015,135,-453.7651763916015,135,-444.85948715209963,135,-444.85948715209963,135,-435.9537979125977,135,-425.9537979125977]},
                  {"from":-4,"to":-5,"fromPort":"B","toPort":"T","points":[135,-358.8274520874024,135,-348.8274520874024,135,-338.92176284790037,135,-338.92176284790037,135,-329.0160736083984,135,-319.0160736083984]},
                  {"from":-5,"to":-6,"fromPort":"R","toPort":"L","visible":true,"points":[237.4529571533203,-285.390625,247.4529571533203,-285.390625,276.1170425415039,-285.390625,276.1170425415039,-285.390625,304.7811279296875,-285.390625,314.7811279296875,-285.390625],"text":"Si"},
                  {"from":-2,"to":-7,"fromPort":"R","toPort":"L","points":[200.14727020263672,-566.390625,210.14727020263672,-566.390625,261.094482421875,-566.390625,261.094482421875,-566.390625,312.0416946411133,-566.390625,322.0416946411133,-566.390625]},
                  {"from":-5,"to":-9,"fromPort":"B","toPort":"T","visible":true,"points":[135,-251.76517639160153,135,-241.76517639160153,135,-203.8283493041992,133,-203.8283493041992,133,-165.8915222167969,133,-155.8915222167969],"text":"No"}
                  ]} </textarea>
                </font>
                <p class="text-xs" _msthash="146341" _msttexthash="2480244">EdsonJS versión 2.2.12. Copyright 1998-2022
                    por
                    AlainEd.</p>
            </div>
        </div>
    </div>
</x-app-tenant-layout>
