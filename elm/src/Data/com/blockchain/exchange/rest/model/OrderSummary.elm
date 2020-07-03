{-
   Blockchain.com Exchange REST API
   ## Introduction Welcome to Blockchain.com's Exchange API and developer documentation. These documents detail and give examples of various functionality offered by the API such as receiving real time market data, requesting balance information and performing trades. ## To Get Started Create or log into your existing Blockchain.com Exchange account Select API from the drop down menu Fill out form and click “Create New API Key Now” Once generated you can view your keys under API Settings 

   The version of the OpenAPI document: 1.0.0

   NOTE: This file is auto generated by the openapi-generator.
   https://github.com/openapitools/openapi-generator.git
   Do not edit this file manually.
-}


module Data.OrderSummary exposing (OrderSummary, decoder, encode, encodeWithTag, toString)

import Data.OrderStatus as OrderStatus exposing (OrderStatus)
import Data.Side as Side exposing (Side)
import Dict exposing (Dict)
import Json.Decode as Decode exposing (Decoder)
import Json.Decode.Pipeline exposing (optional, required)
import Json.Encode as Encode


type alias OrderSummary =
    { exOrdId : Maybe (Int)
    , clOrdId : Maybe (String)
    , ordStatus : Maybe (OrderStatus)
    , side : Maybe (Side)
    , text : Maybe (String)
    , symbol : Maybe (String)
    , lastShares : Maybe (Float)
    , lastPx : Maybe (Float)
    , leavesQty : Maybe (Float)
    , cumQty : Maybe (Float)
    , avgPx : Maybe (Float)
    , timestamp : Maybe (Int)
    }


decoder : Decoder OrderSummary
decoder =
    Decode.succeed OrderSummary
        |> optional "exOrdId" (Decode.nullable Decode.int) Nothing
        |> optional "clOrdId" (Decode.nullable Decode.string) Nothing
        |> optional "ordStatus" (Decode.nullable OrderStatus.decoder) Nothing
        |> optional "side" (Decode.nullable Side.decoder) Nothing
        |> optional "text" (Decode.nullable Decode.string) Nothing
        |> optional "symbol" (Decode.nullable Decode.string) Nothing
        |> optional "lastShares" (Decode.nullable Decode.float) Nothing
        |> optional "lastPx" (Decode.nullable Decode.float) Nothing
        |> optional "leavesQty" (Decode.nullable Decode.float) Nothing
        |> optional "cumQty" (Decode.nullable Decode.float) Nothing
        |> optional "avgPx" (Decode.nullable Decode.float) Nothing
        |> optional "timestamp" (Decode.nullable Decode.int) Nothing



encode : OrderSummary -> Encode.Value
encode =
    Encode.object << encodePairs


encodeWithTag : ( String, String ) -> OrderSummary -> Encode.Value
encodeWithTag (tagField, tag) model =
    Encode.object <| encodePairs model ++ [ ( tagField, Encode.string tag ) ]


encodePairs : OrderSummary -> List (String, Encode.Value)
encodePairs model =
    [ ( "exOrdId", Maybe.withDefault Encode.null (Maybe.map Encode.int model.exOrdId) )
    , ( "clOrdId", Maybe.withDefault Encode.null (Maybe.map Encode.string model.clOrdId) )
    , ( "ordStatus", Maybe.withDefault Encode.null (Maybe.map OrderStatus.encode model.ordStatus) )
    , ( "side", Maybe.withDefault Encode.null (Maybe.map Side.encode model.side) )
    , ( "text", Maybe.withDefault Encode.null (Maybe.map Encode.string model.text) )
    , ( "symbol", Maybe.withDefault Encode.null (Maybe.map Encode.string model.symbol) )
    , ( "lastShares", Maybe.withDefault Encode.null (Maybe.map Encode.float model.lastShares) )
    , ( "lastPx", Maybe.withDefault Encode.null (Maybe.map Encode.float model.lastPx) )
    , ( "leavesQty", Maybe.withDefault Encode.null (Maybe.map Encode.float model.leavesQty) )
    , ( "cumQty", Maybe.withDefault Encode.null (Maybe.map Encode.float model.cumQty) )
    , ( "avgPx", Maybe.withDefault Encode.null (Maybe.map Encode.float model.avgPx) )
    , ( "timestamp", Maybe.withDefault Encode.null (Maybe.map Encode.int model.timestamp) )
    ]



toString : OrderSummary -> String
toString =
    Encode.encode 0 << encode




