Dear {{$details['hirer_name']}},

Your tanker hire contract is ready for signing.

Please click on the below link to digitally sign your contract before your hire start date. You can digitally sign this hire contract with just a couple of taps on your desktop, smartphone or tablet.

{{$details['link_url']}}

To view or print your completed hire contract please use the above link at any time. All hire contract information is stored for a minimum of 5 years from the end of the hire period.

@if($details['attached_docs_url'][0] != '')
    @if($details['isUpdatedDocs'] == "true")
        Reference documents updated. Please Check again.

        @else
        Please refer to the documents below for specific requirements.

        @endif
    @foreach($details['attached_docs_url'] as $attached_doc_url)
        https://tanker.cloud/{{$attached_doc_url}} - Ref Document {{$loop->index + 1}}

    @endforeach
@endif

Thank you for chosing TCL Tanker Rental.

Please call us if you need any additional information.

0113 286 3322

Regards

TCL Tanker Rental Service Team
https://www.tanker.cloud

