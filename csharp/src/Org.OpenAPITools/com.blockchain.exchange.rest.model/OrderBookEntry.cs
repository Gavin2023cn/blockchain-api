/* 
 * Blockchain.com Exchange REST API
 *
 * ## Introduction Welcome to Blockchain.com's Exchange API and developer documentation. These documents detail and give examples of various functionality offered by the API such as receiving real time market data, requesting balance information and performing trades. ## To Get Started Create or log into your existing Blockchain.com Exchange account Select API from the drop down menu Fill out form and click “Create New API Key Now” Once generated you can view your keys under API Settings 
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Text.RegularExpressions;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Runtime.Serialization;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using System.ComponentModel.DataAnnotations;
using OpenAPIDateConverter = Org.OpenAPITools.Client.OpenAPIDateConverter;

namespace Org.OpenAPITools.com.blockchain.exchange.rest.model
{
    /// <summary>
    /// OrderBookEntry
    /// </summary>
    [DataContract]
    public partial class OrderBookEntry :  IEquatable<OrderBookEntry>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="OrderBookEntry" /> class.
        /// </summary>
        /// <param name="px">px.</param>
        /// <param name="qty">qty.</param>
        /// <param name="num">Either the quantity of orders on this price level for L2, or the individual order id for L3.</param>
        public OrderBookEntry(double px = default(double), double qty = default(double), long num = default(long))
        {
            this.Px = px;
            this.Qty = qty;
            this.Num = num;
        }
        
        /// <summary>
        /// Gets or Sets Px
        /// </summary>
        [DataMember(Name="px", EmitDefaultValue=false)]
        public double Px { get; set; }

        /// <summary>
        /// Gets or Sets Qty
        /// </summary>
        [DataMember(Name="qty", EmitDefaultValue=false)]
        public double Qty { get; set; }

        /// <summary>
        /// Either the quantity of orders on this price level for L2, or the individual order id for L3
        /// </summary>
        /// <value>Either the quantity of orders on this price level for L2, or the individual order id for L3</value>
        [DataMember(Name="num", EmitDefaultValue=false)]
        public long Num { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class OrderBookEntry {\n");
            sb.Append("  Px: ").Append(Px).Append("\n");
            sb.Append("  Qty: ").Append(Qty).Append("\n");
            sb.Append("  Num: ").Append(Num).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }
  
        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public virtual string ToJson()
        {
            return JsonConvert.SerializeObject(this, Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="input">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object input)
        {
            return this.Equals(input as OrderBookEntry);
        }

        /// <summary>
        /// Returns true if OrderBookEntry instances are equal
        /// </summary>
        /// <param name="input">Instance of OrderBookEntry to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(OrderBookEntry input)
        {
            if (input == null)
                return false;

            return 
                (
                    this.Px == input.Px ||
                    (this.Px != null &&
                    this.Px.Equals(input.Px))
                ) && 
                (
                    this.Qty == input.Qty ||
                    (this.Qty != null &&
                    this.Qty.Equals(input.Qty))
                ) && 
                (
                    this.Num == input.Num ||
                    (this.Num != null &&
                    this.Num.Equals(input.Num))
                );
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            unchecked // Overflow is fine, just wrap
            {
                int hashCode = 41;
                if (this.Px != null)
                    hashCode = hashCode * 59 + this.Px.GetHashCode();
                if (this.Qty != null)
                    hashCode = hashCode * 59 + this.Qty.GetHashCode();
                if (this.Num != null)
                    hashCode = hashCode * 59 + this.Num.GetHashCode();
                return hashCode;
            }
        }

        /// <summary>
        /// To validate all properties of the instance
        /// </summary>
        /// <param name="validationContext">Validation context</param>
        /// <returns>Validation Result</returns>
        IEnumerable<System.ComponentModel.DataAnnotations.ValidationResult> IValidatableObject.Validate(ValidationContext validationContext)
        {
            yield break;
        }
    }

}
