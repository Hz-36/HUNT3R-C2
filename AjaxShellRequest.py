import http.client

def send_ajax_request(path):
    conn = http.client.HTTPConnection("localhost", 4444) 
    conn.request("GET", path)
    response = conn.getresponse()
    print("Response status:", response.status)
    print("Response reason:", response.reason)
    print("Response body:", response.read().decode('utf-8'))

if __name__ == "__main__":
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xEXECUTE_CMDx")
    send_ajax_request("/xSHELL_CLIENTx/XCLIENT00001")

    input("Press Enter to exit...")

    #send_ajax_request("/xSTART_LISTENERx/XCLIENT00002")
