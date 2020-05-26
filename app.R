library(shiny)
library(leaflet)
library(dplyr)
library(rgdal)
library(rsconnect)


load(file = "required_data.RData")

ui <- 
    shinyUI(
    
    fluidPage(


    tabPanel("The Animal Sightings and Bushfire regions Display",
             titlePanel("The Animal Sightings and Bushfire Regions"),
             fluidRow(
                 
                 
                 column(4,sliderInput("distance",
                                      "Distance from bushfire in km",
                                      min = 0,
                                      max = 110,
                                      value = c(20,60)),hr(),
                        
                        checkboxGroupInput("Animals", "Please select a class:",
                                           choiceNames =
                                               list("Mammal", "Birds","Reptiles","Fishes","Arthropods","Molluscs","Amphibians"),
                                           selected = "['Animals', 'Mammals']",
                                           choiceValues =
                                               list("['Animals', 'Mammals']", "['Animals', 'Birds']", "['Animals', 'Reptiles']","['Animals', 'Fishes']","['Animals', 'Arthropods']","['Animals', 'Molluscs']","['Animals', 'Amphibians']")
                        
                        )),br(),
                 
                 
                 column(6,
                        leafletOutput("leafmap"),
                        br()
                 ),
             
                
)
)))

server <- function(input, output) {
    {
        ## Leaflet Map
        output$leafmap <- renderLeaflet({
            bushfire_dis <-input$distance
            selected <- c(input$Animals)
            
            subdata <- filter(data, data$speciesGroups %in% selected)
            
            final <-filter(subdata, distance_bushfire > bushfire_dis[1], distance_bushfire < bushfire_dis[2])
            
            
            
            leaflet(data=data) %>%
                setView(144,-37,zoom=6.5)%>%
                addTiles()%>%
                addCircleMarkers(data=final, ~decimalLongitude, ~decimalLatitude,
                                 layerId=~uuid, popup= paste("Scientific Name: ", final$raw_scientificName,"<br>",
                                                             "Common Name: ",final$vernacularName,"<br>",
                                                             "phylum: ",final$phylum,"<br>",
                                                             "class: ",final$classs_x,"<br>",
                                                             "State/Province: ",final$stateProvince,"<br>",
                                                             "Latitude: ",final$decimalLatitude,"<br>",
                                                             "Longitude: ",final$decimalLongitude,"<br>",
                                                             "Year: ",final$year,"<br>",
                                                             "Month: ",final$month,"<br>",
                                                             "Distance to Bushfire: ",final$distance_bushfire,"km"), 
                                 radius=6 , color="black", fillColor="red", stroke = TRUE, fillOpacity = 0.8,group = "animal sightings")%>%
                addPolygons(data = shp, fill = F, weight = 4, color = "blue",group ="bushfire region")%>%
                addLayersControl(
                    overlayGroups  = c("animal sightings", "bushfire region"),
                    options = layersControlOptions(collapsed = FALSE)
                )
        })
    }
}
# Run the application 
shinyApp(ui = ui, server = server)
