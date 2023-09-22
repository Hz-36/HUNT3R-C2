import http.client

def send_ajax_request(path):
    conn = http.client.HTTPConnection("localhost", 4444)  # Adjust the host and port accordingly
    conn.request("GET", path)
    response = conn.getresponse()
    print("Response status:", response.status)
    print("Response reason:", response.reason)
    print("Response body:", response.read().decode('utf-8'))

if __name__ == "__main__":
    # Example AJAX requests
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xSTART_LISTENERx/XCLIENT00001")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xSTART_LISTENERx/XCLIENT00002")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")


    input("Press Enter to exit...")