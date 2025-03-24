<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include("layout.linc")

    <title>@yield("title")</title>
</head>


@include("layout.nav")


@yield("content")

@include("layout.footer")

@include("layout.script")
