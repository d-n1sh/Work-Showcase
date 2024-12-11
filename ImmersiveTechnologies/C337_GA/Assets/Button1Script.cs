using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Button1Script : MonoBehaviour
{
    public gameControlScript gc;

    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {
        
    }

    public void PressButton()
    {
        transform.position = new Vector3(transform.position.x - 0.01f, transform.position.y, transform.position.z);
        gc.SetButton1(true);
        GetComponent<BoxCollider>().enabled = false;
        gc.PlayClickSound();
    }

}
